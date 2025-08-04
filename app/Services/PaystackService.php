<?php

namespace App\Services;

use App\Models\Invoice;
use App\Models\Payment;
use App\Models\Transaction;
use App\Models\Notification;
use App\Mail\ClientMakePaymentMail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PaystackService
{
    protected $baseUrl = 'https://api.paystack.co';
    protected $secretKey;
    protected $publicKey;
    protected $callbackUrl;
    protected $webhookUrl;

    public function __construct()
    {
        $this->secretKey = config('payments.paystack.secret_key');
        $this->publicKey = config('payments.paystack.public_key');
        $this->callbackUrl = config('payments.paystack.callback_url');
        $this->webhookUrl = config('payments.paystack.webhook_url');
    }

    /**
     * Initialize a Paystack transaction for an invoice
     */
    public function createInvoicePayment(Invoice $invoice)
    {
        return $this->initializeTransaction($invoice, $invoice->final_amount);
    }

    /**
     * Create a payment initialization for an invoice
     */
    public function initializeTransaction(Invoice $invoice, $amount)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->secretKey,
                'Content-Type' => 'application/json',
            ])->post($this->baseUrl . '/transaction/initialize', [
                'email' => $invoice->client->user->email,
                'amount' => $amount * 100, // Convert to lowest currency unit (kobo)
                'currency' => getInvoiceCurrencyCode($invoice->currency_id),
                                'callback_url' => $this->callbackUrl,
                'reference' => 'INV-' . $invoice->invoice_id . '-' . time(),
                'metadata' => [
                    'invoice_id' => $invoice->id,
                    'custom_fields' => [
                        [
                            'display_name' => 'Invoice Number',
                            'variable_name' => 'invoice_number',
                            'value' => $invoice->invoice_id
                        ]
                    ]
                ]
            ]);

            if ($response->successful()) {
                return [
                    'success' => true,
                    'data' => $response->json()['data']
                ];
            }

            Log::error('Paystack initialization failed', [
                'invoice' => $invoice->id,
                'response' => $response->json()
            ]);

            return [
                'success' => false,
                'message' => $response->json()['message'] ?? 'Payment initialization failed'
            ];
        } catch (\Exception $e) {
            Log::error('Paystack error', [
                'invoice' => $invoice->id,
                'error' => $e->getMessage()
            ]);

            return [
                'success' => false,
                'message' => 'An error occurred while processing the payment'
            ];
        }
    }

    /**
     * Process successful payment
     */
    public function handleSuccessfulPayment($paymentData)
    {
        DB::beginTransaction();
        try {
            $reference = $paymentData['reference'];
            $amount = $paymentData['amount'] / 100; // Convert back from kobo to actual currency

            // Extract invoice ID from reference (format: INV-{invoice_id}-{timestamp})
            $invoiceId = explode('-', $reference)[1];
            
            $invoice = Invoice::with(['client.user', 'payments'])->where('invoice_id', $invoiceId)->firstOrFail();
            
            // Calculate if this is a full or partial payment
            if ($invoice->status == Payment::PARTIALLYPAYMENT) {
                $totalAmount = ($invoice->final_amount - $invoice->payments->sum('amount'));
            } else {
                $totalAmount = $invoice->final_amount;
            }

            // Create transaction record
            $transaction = Transaction::create([
                'transaction_id' => $paymentData['id'],
                'amount' => $amount,
                'user_id' => $invoice->client->id,
                'status' => 'paid',
                'meta' => json_encode($paymentData),
            ]);

            // Create payment record
            $payment = Payment::create([
                'invoice_id' => $invoice->id,
                'amount' => $amount,
                'payment_mode' => Payment::PAYSTACK,
                'payment_date' => Carbon::now(),
                'transaction_id' => $transaction->id,
                'notes' => 'Paid via Paystack - Reference: ' . $reference,
                'is_approved' => Payment::APPROVED,
            ]);

            // Update invoice status
            if (round($totalAmount, 2) == $amount) {
                $invoice->status = Payment::FULLPAYMENT;
            } elseif (round($totalAmount, 2) != $amount) {
                $invoice->status = Payment::PARTIALLYPAYMENT;
            }
            $invoice->save();

            // Send notifications
            $title = 'Payment ' . getInvoiceCurrencyIcon($invoice->currency_id) . $amount . 
                    ' received successfully for #' . $invoice->invoice_id;
            
            addNotification([
                Notification::NOTIFICATION_TYPE['Invoice Payment'],
                getAdminUser()->id,
                $title,
            ]);

            // Send email notification
            if (getSettingValue('mail_notification')) {
                $invoiceData = [
                    'amount' => $payment->amount,
                    'payment_date' => $payment->payment_date,
                    'invoice_id' => $invoice->id,
                    'invoice' => $invoice,
                ];
                Mail::to(getAdminUser()->email)->send(new ClientMakePaymentMail($invoiceData));
            }

            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error processing Paystack payment', [
                'error' => $e->getMessage(),
                'data' => $paymentData
            ]);
            return false;
        }
    }

    /**
     * Verify Paystack transaction
     */
    public function verifyPayment($reference)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->secretKey,
                'Content-Type' => 'application/json',
            ])->get($this->baseUrl . '/transaction/verify/' . $reference);

            return $response->json();
        } catch (\Exception $e) {
            Log::error('Paystack verification error', [
                'reference' => $reference,
                'error' => $e->getMessage()
            ]);

            return null;
        }
    }
}
