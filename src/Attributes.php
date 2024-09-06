<?php

namespace MichaelNabil230\LaravelPaymentUrway;

trait Attributes
{
    /**
     * Store request attributes.
     *
     * @var array<string, mixed>
     */
    protected array $attributes = [];

    /**
     * Set Track id for request attributes.
     */
    public function setTrackId(string $trackId): self
    {
        $this->setAttribute('trackid', $trackId);

        return $this;
    }

    /**
     * Set Customer email for request attributes.
     */
    public function setCustomerEmail(string $email): self
    {
        $this->setAttribute('customerEmail', $email);

        return $this;
    }

    /**
     * Set Customer ip for request attributes.
     */
    public function setCustomerIp(string $ip): self
    {
        $this->setAttribute('merchantIp', $ip);

        return $this;
    }

    /**
     * Set currency for request attributes.
     */
    public function setCurrency(string $currency): self
    {
        $this->setAttribute('currency', $currency);

        return $this;
    }

    /**
     * Set country for request attributes.
     */
    public function setCountry(string $country): self
    {
        $this->setAttribute('country', $country);

        return $this;
    }

    /**
     * Set amount for request attributes.
     */
    public function setAmount(float $amount): self
    {
        $this->setAttribute('amount', $amount);

        return $this;
    }

    /**
     * Set redirect url for request attributes.
     */
    public function setRedirectUrl(string $url): self
    {
        $this->setAttribute('udf2', $url);

        return $this;
    }

    /**
     * Set attributes for request attributes.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function setAttributes(array $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Merge attributes for request attributes.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function mergeAttributes(array $attributes): self
    {
        $this->attributes = array_merge($this->attributes, $attributes);

        return $this;
    }

    /**
     * Set attribute for request attributes.
     */
    public function setAttribute(string $key, mixed $value): self
    {
        $this->attributes[$key] = $value;

        return $this;
    }

    /**
     * Has attribute in attributes.
     */
    public function hasAttribute(string $key): bool
    {
        return isset($this->attributes[$key]);
    }

    /**
     * Get attribute in attributes.
     */
    public function getAttribute(string $key, mixed $default = null): mixed
    {
        return $this->hasAttribute($key) ? $this->attributes[$key] : $default;
    }

    /**
     * Remove attribute in attributes.
     */
    public function removeAttribute(string $key): self
    {
        $this->attributes = array_filter(
            $this->attributes,
            fn ($name) => $name !== $key,
            ARRAY_FILTER_USE_KEY,
        );

        return $this;
    }

    /**
     * Generate request hash.
     */
    protected function generateRequestHash(): void
    {
        $this->setAttribute('requestHash', hash('sha256', implode('|', [
            $this->getAttribute('trackid'),
            config('urway.auth.terminal_id'),
            config('urway.auth.password'),
            config('urway.auth.merchant_key'),
            $this->getAttribute('amount'),
            $this->getAttribute('currency'),
        ])));

        $this->setAttribute('action', '1');
    }

    /**
     * Generate find request hash.
     */
    protected function generateFindRequestHash(): void
    {
        $this->setAttribute('requestHash', hash('sha256', implode('|', [
            $this->getAttribute('trackid'),
            config('urway.auth.terminal_id'),
            config('urway.auth.password'),
            config('urway.auth.merchant_key'),
            $this->getAttribute('amount'),
            $this->getAttribute('currency'),
        ])));

        $this->setAttribute('action', '10');
    }

    /**
     * Set auth attributes.
     */
    protected function setAuthAttributes(): void
    {
        $this->setAttribute('terminalId', config('urway.auth.terminal_id'));
        $this->setAttribute('password', config('urway.auth.password'));
    }
}
