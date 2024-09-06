<?php

namespace MichaelNabil230\LaravelPaymentUrway\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use MichaelNabil230\LaravelPaymentUrway\Events\PaymentFailed;
use MichaelNabil230\LaravelPaymentUrway\Events\PaymentSuccessful;

class UrwayController
{
    public function __invoke(Request $request): Response
    {
        if ($request->Result == 'Successful' && $request->ResponseCode == '000') {
            PaymentSuccessful::dispatch($request->all());
        } else {
            PaymentFailed::dispatch($request->all());
        }

        return response()->noContent();
    }
}
