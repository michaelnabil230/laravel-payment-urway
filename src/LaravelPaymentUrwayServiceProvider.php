<?php

namespace MichaelNabil230\LaravelPaymentUrway;

use Illuminate\Support\Facades\Route;
use MichaelNabil230\LaravelPaymentUrway\Http\Controllers\UrwayController;
use MichaelNabil230\LaravelPaymentUrway\Http\Middleware\UrwayKeyValidatorHash;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelPaymentUrwayServiceProvider extends PackageServiceProvider
{
    public function registeringPackage(): void
    {
        $this->registerRouteMacros();
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-payment-urway')
            ->hasConfigFile();
    }

    protected function registerRouteMacros(): void
    {
        Route::macro('urway', function (string $baseUrl = 'webhook') {
            Route::prefix($baseUrl)->group(function () {
                Route::post('urway', UrwayController::class)
                    ->name('urway')
                    ->middleware(UrwayKeyValidatorHash::class);
            });
        });
    }
}
