<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'github' => [
        'client_id' => '0727c68d8a2101da1bb5',
        'client_secret' => 'e703d01e541d4f966148f5dd2ab66c94a28fce0a',
        'redirect' => 'http://localhost:8000/retorno/github',
    ],

    'facebook' => [
        'client_id' => '639474056399344',
        'client_secret' => '019a5a5ff2cf2b613dad5e77a9a491fd',
        'redirect' => 'http://localhost:8000/retorno/facebook',
    ],

];
