<?php

namespace MichaelNabil230\LaravelPaymentUrway;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class LaravelPaymentUrway
{
    use Attributes, Mode;

    protected PendingRequest $client;

    /**
     * LaravelPaymentUrway constructor.
     */
    public function __construct()
    {
        $this->client = Http::acceptJson()->baseUrl($this->getBaseUrl());
    }

    /**
     * LaravelPaymentUrway as static.
     */
    public static function make(): self
    {
        return new self;
    }

    /**
     * For create a new payment request.
     */
    public function pay(): Response
    {
        $this->setAuthAttributes();

        $this->generateRequestHash();

        $response = $this->client->post('URWAYPGService/transaction/jsonProcess/JSONrequest', $this->attributes);

        return Response::make($response->collect()->toArray());
    }

    /**
     * For find by transaction id.
     */
    public function find(string $transactionId): Response
    {
        $this->setAuthAttributes();

        $this->generateFindRequestHash();

        $this->setAttribute('transid', $transactionId);

        $response = $this->client->post('URWAYPGService/transaction/jsonProcess/JSONrequest', $this->attributes);

        return Response::make($response->collect()->toArray());
    }
}
