<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '1048485324514-3plh6evb1c9a70m1kkrgh3d2kn731ugt.apps.googleusercontent.com',
        'client_secret' => '9AHenAAk2anh0yA77Oe3xyGf',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],
    'github' => [
	'client_id' => '67a1d6009bec36d3286a',
        'client_secret' => '95ca95eeffe89a5e5d30f01e7234dbd0cb750b52',
        'redirect' => 'http://localhost:8000/auth/github/callback',
    ],
];
