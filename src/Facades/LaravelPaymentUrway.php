<?php

namespace MichaelNabil230\LaravelPaymentUrway\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \MichaelNabil230\LaravelPaymentUrway\LaravelPaymentUrway make()
 * @method static \MichaelNabil230\LaravelPaymentUrway\Response pay()
 * @method static \MichaelNabil230\LaravelPaymentUrway\Response find(string $transactionId)
 * @method static \MichaelNabil230\LaravelPaymentUrway\LaravelPaymentUrway setTrackId(string $trackId)
 * @method static \MichaelNabil230\LaravelPaymentUrway\LaravelPaymentUrway setCustomerEmail(string $email)
 * @method static \MichaelNabil230\LaravelPaymentUrway\LaravelPaymentUrway setCustomerIp(string $ip)
 * @method static \MichaelNabil230\LaravelPaymentUrway\LaravelPaymentUrway setCurrency(string $currency)
 * @method static \MichaelNabil230\LaravelPaymentUrway\LaravelPaymentUrway setCountry(string $country)
 * @method static \MichaelNabil230\LaravelPaymentUrway\LaravelPaymentUrway setAmount(float $amount)
 * @method static \MichaelNabil230\LaravelPaymentUrway\LaravelPaymentUrway setRedirectUrl(string $url)
 * @method static \MichaelNabil230\LaravelPaymentUrway\LaravelPaymentUrway setAttributes(array $attributes)
 * @method static \MichaelNabil230\LaravelPaymentUrway\LaravelPaymentUrway mergeAttributes(array $attributes)
 * @method static \MichaelNabil230\LaravelPaymentUrway\LaravelPaymentUrway setAttribute(string $key, mixed $value)
 * @method static bool hasAttribute(string $key)
 * @method static mixed getAttribute(string $key, mixed $default = null)
 * @method static \MichaelNabil230\LaravelPaymentUrway\LaravelPaymentUrway removeAttribute(string $key)
 * @method static string getMode()
 * @method static bool isTesting()
 * @method static bool isProduction()
 *
 * @see \MichaelNabil230\LaravelPaymentUrway\LaravelPaymentUrway
 */
class LaravelPaymentUrway extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \MichaelNabil230\LaravelPaymentUrway\LaravelPaymentUrway::class;
    }
}
