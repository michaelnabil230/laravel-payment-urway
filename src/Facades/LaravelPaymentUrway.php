<?php

namespace MichaelNabil230\LaravelPaymentUrway\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MichaelNabil230\LaravelPaymentUrway\LaravelPaymentUrway
 */
class LaravelPaymentUrway extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \MichaelNabil230\LaravelPaymentUrway\LaravelPaymentUrway::class;
    }
}
