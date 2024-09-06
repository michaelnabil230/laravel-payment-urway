<?php

return [
    'mode' => env('URWAY_MODE', 'test'),
    'webhook_key' => env('URWAY_WEBHOOK_KEY'),
    'auth' => [
        'terminal_id' => env('URWAY_TERMINAL_ID'),
        'password' => env('URWAY_PASSWORD'),
        'merchant_key' => env('URWAY_MERCHANT_KEY'),
    ],
];
