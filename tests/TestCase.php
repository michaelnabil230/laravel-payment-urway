<?php

namespace MichaelNabil230\LaravelPaymentUrway\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use MichaelNabil230\LaravelPaymentUrway\LaravelPaymentUrwayServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'MichaelNabil230\\LaravelPaymentUrway\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelPaymentUrwayServiceProvider::class,
        ];
    }
}
