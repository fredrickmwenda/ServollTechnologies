<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Services\PaystackService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaystackWebhookController extends Controller
{
    protected $paystackService;

    public function __construct(PaystackService $paystackService)
    {
        $this->paystackService = $paystackService;
    }

    public function handleWebhook(Request $request)
    {
        // Verify the request is from Paystack by checking the request origin
        if (!$request->hasHeader('x-paystack-signature')) {
            Log::error('Paystack webhook signature header missing');
            return response()->json(['message' => 'Invalid request'], 400);
        }

        $payload = $request->all();
        Log::info('Paystack webhook received', ['event' => $payload['event']]);

        // Handle the event
        switch ($payload['event']) {
            case 'charge.success':
                return $this->handleSuccessfulPayment($payload['data']);
            
            case 'transfer.success':
                Log::info('Transfer successful', ['data' => $payload['data']]);
                return response()->json(['message' => 'Transfer processed']);

            case 'transfer.failed':
                Log::error('Transfer failed', ['data' => $payload['data']]);
                return response()->json(['message' => 'Transfer failed notification received']);

            default:
                Log::info('Unhandled Paystack webhook event', ['event' => $payload['event']]);
                return response()->json(['message' => 'Webhook received']);
        }
    }

    protected function handleSuccessfulPayment($data)
    {
        try {
            // Verify the payment with Paystack
            $verificationResponse = $this->paystackService->verifyPayment($data['reference']);
            
            if (!$verificationResponse || $verificationResponse['data']['status'] !== 'success') {
                Log::error('Payment verification failed', [
                    'reference' => $data['reference'],
                    'response' => $verificationResponse
                ]);
                return response()->json(['message' => 'Payment verification failed'], 400);
            }

            // Process the payment
            if ($this->paystackService->handleSuccessfulPayment($data)) {
                return response()->json(['message' => 'Payment processed successfully']);
            }

            return response()->json(['message' => 'Error processing payment'], 500);
        } catch (\Exception $e) {
            Log::error('Error processing Paystack webhook', [
                'error' => $e->getMessage(),
                'data' => $data
            ]);
            return response()->json(['message' => 'Error processing webhook'], 500);
        }
    }
}
