<?php

namespace MichaelNabil230\LaravelPaymentUrway\Commands;

use Illuminate\Console\Command;

class LaravelPaymentUrwayCommand extends Command
{
    public $signature = 'laravel-payment-urway';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
