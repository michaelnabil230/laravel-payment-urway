<?php

namespace MichaelNabil230\LaravelPaymentUrway\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UrwayKeyValidatorHash
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $key = config('urway.webhook_key');

        throw_if(is_null($key), 'Missing webhook key.');

        // TODO: validate hash

        return $next($request);
    }
}
