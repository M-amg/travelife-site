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
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],
    'hotelbeds' => [
        'url' => env('HB_URL'),
        'contentUrl' => env('HB_CONTENT_URL'),
        'key' => env('HB_KEY'),
        'secret' => env('HB_SECRET'),
    ],
    'jumbo' => [
        'wsdl' => env('JUMBO_WSDL'),
        'brand_code' => env('JUMBO_BRAND_CODE'),
        'point_of_sale' => env('JUMBO_POINTOFSALE_ID'),
        'agency_code' => env('JUMBO_AGENCY_CODE'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],
    'facebook' => [
        'client_id'     =>env('FACEBOOK_ID'),
        'client_secret' =>env('FACEBOOK_SECRET'),
        'redirect'      =>env('FACEBOOK_URL'),
    ],
    'google' => [
        'client_id'     => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect'      => env('GOOGLE_REDIRECT')
    ],
    'ats' => [
        'wsdl' => env('ATS_WSDL'),
        'username' => env('ATS_USERNAME','nanoPlus'),
        'password' => env('ATS_PASSWORD','gzr#cdi8'),
        'pcc' => env('ATS_PCC', 'CASMO28TE'),
        'crs_user' => env('CRS_USER', 'WS0SUHIK'),
    ],
    'pathImg' => env('PATH_IMG',''),

    'places' => env('PLACES_TOKEN', 'pk.eyJ1Ijoibm5vdWlzc2VyIiwiYSI6ImNrc3B6M3U0aTA3eWcydm1kcHU0MGdnd3QifQ.bkEYjuh5C3MIG_h0CfRShg'),
];
