<div>
    @if($value['invoice_id'])
        <div class="d-flex justify-content-center">
            <button type="button" 
                    class="btn btn-primary btn-sm me-2"
                    data-bs-toggle="tooltip"
                    title="Create Paystack Invoice"
                    onclick="createPaystackInvoice({{ $value['invoice_id'] }})">
                <i class="fas fa-money-bill"></i> Paystack
            </button>
        </div>
    @endif
</div>

<script>
function createPaystackInvoice(invoiceId) {
    $.ajax({
        url: route('invoices.create-paystack', invoiceId),
        type: 'POST',
        success: function(result) {
            if (result.success) {
                window.location.href = result.data.authorization_url;
            } else {
                displayErrorMessage(result.message);
            }
        },
        error: function(result) {
            displayErrorMessage(result.responseJSON.message);
        }
    });
}
</script>
