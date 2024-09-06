<?php

namespace MichaelNabil230\LaravelPaymentUrway;

use Illuminate\Contracts\Support\Arrayable;

/**
 * @property ?string $payid
 *
 * @implements Arrayable<array-key, mixed>
 */
class Response implements Arrayable
{
    /**
     * Response constructor.
     *
     * @param  array<string, mixed>  $data
     */
    public function __construct(protected array $data) {}

    /**
     * Create new response.
     *
     * @param  array<string, mixed>  $data
     */
    public static function make(array $data): self
    {
        return new self($data);
    }

    /**
     * The payment url.
     */
    public function getPaymentUrl(): string
    {
        if (! empty($this->data['payid']) && ! empty($this->data['targetUrl'])) {
            return $this->data['targetUrl'].'?paymentid='.$this->data['payid'];
        }

        throw new \Exception('Payment url not found.');
    }

    /**
     * Get the bool value for response is success.
     */
    public function isSuccess(): bool
    {
        return $this->data['result'] == 'Successful' && $this->data['responseCode'] == '000';
    }

    /**
     * Get the bool value for response is failure.
     */
    public function isFailure(): bool
    {
        return ! $this->isSuccess();
    }

    /**
     * Get the data for name.
     */
    public function __get(string $name): mixed
    {
        return $this->data[$name];
    }

    /**
     * Convert the model instance to an array.
     */
    public function toArray(): array
    {
        return $this->data;
    }
}
