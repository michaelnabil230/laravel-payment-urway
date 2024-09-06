<?php

namespace MichaelNabil230\LaravelPaymentUrway\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PaymentFailed
{
    use Dispatchable, SerializesModels;

    /**
     * Create new instance.
     *
     * @param  array<string, mixed>  $data
     */
    public function __construct(public array $data) {}
}
