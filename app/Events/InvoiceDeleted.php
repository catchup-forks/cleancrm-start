<?php

namespace IP\Events;

use Illuminate\Queue\SerializesModels;
use IP\Modules\Invoices\Models\Invoice;

class InvoiceDeleted extends Event
{
    use SerializesModels;

    public function __construct(Invoice $invoice)
    {
        $this->invoice = $invoice;
    }
}
