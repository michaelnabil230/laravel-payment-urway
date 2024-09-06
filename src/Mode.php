<?php

namespace MichaelNabil230\LaravelPaymentUrway;

trait Mode
{
    /**
     * Get the package mode.
     */
    public function getMode(): string
    {
        return config()->string('urway.mode', 'test');
    }

    /**
     * Determine whether the mode is test.
     */
    public function isTesting(): bool
    {
        return $this->getMode() === 'test';
    }

    /**
     * Determine whether the mode is production.
     */
    public function isProduction(): bool
    {
        return $this->getMode() === 'production';
    }

    /**
     * Determine the base path based on the mode.
     */
    protected function getBaseUrl(): string
    {
        if ($this->isTesting()) {
            return 'https://payments-dev.urway-tech.com';
        }

        return 'https://payments.urway-tech.com';
    }
}
