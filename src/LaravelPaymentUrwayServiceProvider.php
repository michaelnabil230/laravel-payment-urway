<?php

namespace MichaelNabil230\LaravelPaymentUrway;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MichaelNabil230\LaravelPaymentUrway\Commands\LaravelPaymentUrwayCommand;

class LaravelPaymentUrwayServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-payment-urway')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_payment_urway_table')
            ->hasCommand(LaravelPaymentUrwayCommand::class);
    }
}
