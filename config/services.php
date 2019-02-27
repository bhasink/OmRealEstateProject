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
        'domain' => 'mg.phplaravel-163112-471465.cloudwaysapps.com',
        'secret' => 'k=rsa; p=MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDVJre8RNXOONbiyTrGGeNknHpuZHOG2K2neN8ygiTEy8VFv/Rpp2lQtFKUnaE0DMfFwZe3VZQabvc6aij/++8Yfsb2+3M1vE4Dqfivo7Rv+aX1fW7vBKqZ9QZOgX34vXHwWu5QZ3qQIgen+mGGvbi31rqNqdpueC30Mbou4q0o/QIDAQAB',
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
        'model' => Omaxe\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
