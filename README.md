# This is my package laravel-payment-urway

[![Latest Version on Packagist](https://img.shields.io/packagist/v/michaelnabil230/laravel-payment-urway.svg?style=flat-square)](https://packagist.org/packages/michaelnabil230/laravel-payment-urway)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/michaelnabil230/laravel-payment-urway/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/michaelnabil230/laravel-payment-urway/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/michaelnabil230/laravel-payment-urway/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/michaelnabil230/laravel-payment-urway/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/michaelnabil230/laravel-payment-urway.svg?style=flat-square)](https://packagist.org/packages/michaelnabil230/laravel-payment-urway)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-payment-urway.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-payment-urway)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require michaelnabil230/laravel-payment-urway
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-payment-urway-config"
```

This is the contents of the published config file:

```php
return [
    'mode' => env('URWAY_MODE', 'test'),
    'webhook_key' => env('URWAY_WEBHOOK_KEY'),
    'auth' => [
        'terminal_id' => env('URWAY_TERMINAL_ID'),
        'password' => env('URWAY_PASSWORD'),
        'merchant_key' => env('URWAY_MERCHANT_KEY'),
    ],
];
```

## Usage

```php
return MichaelNabil230\LaravelPaymentUrway\LaravelPaymentUrway::make()
        ->setAmount(11.2)
        ->setTrackId('123456789')
        ->setCustomerEmail('hello@example.com')
        ->setCustomerIp('127.0.0.1')
        ->setCurrency('SAR')
        ->setCountry('SA')
        ->setRedirectUrl(route('urway-response'))
        ->pay();
```

## Testing

```bash
composer test
```

## Support

[![Image for sponsor](./.assets/sponsors.png)](https://github.com/sponsors/michaelnabil230)

Or

[![Ko-fi](.assets/ko-fi.png)](https://ko-fi.com/michaelnabil230)[![Buymeacoffee](.assets/buymeacoffee.png)](https://www.buymeacoffee.com/michaelnabil230)[![Paypal](.assets/paypal.png)](https://www.paypal.com/paypalme/MichaelNabil23)


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Michael Nabil](https://github.com/michaelnabil230)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
