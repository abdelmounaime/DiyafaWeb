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
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'firebase' => [
        'api_key' => 'AIzaSyDj90MPVMDT-Xc5K9loTiWgBEbrQgOyfhc', // Only used for JS integration
        'auth_domain' => 'diyafa-9a44e.firebaseapp.com', // Only used for JS integration
        'database_url' => 'https://diyafa-9a44e.firebaseio.com',
        'secret' => '149596886478',
        'storage_bucket' => 'diyafa-9a44e.appspot.com', // Only used for JS integration
    ],

];
