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
        'model' => App\Models\User::class,
	'mode' => env('STRIPE_MODE'),
	'platform' => [
           'account' => env('STRIPE_PLATFORM_ACCOUNT'),
	   'test' => [
	        'publishable' => env('STRIPE_PLATFORM_TEST_PUBLISHABLE'),
                'secret' => env('STRIPE_PLATFORM_TEST_SECRET'),
	    ],
	    'live' => [
	        'publishable' => env('STRIPE_PLATFORM_LIVE_PUBLISHABLE'),
                'secret' => env('STRIPE_PLATFORM_LIVE_SECRET'),
	    ],
            
	],
	'connect' => [
            'account' => '',
	    'publishable' => '',
            'secret' => '',
	],
    ],

];
