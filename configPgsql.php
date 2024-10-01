<?php

return [
    'pgsql' => [
        'driver' => 'pgsql',
        'url' => env('DATABASE_URL'), 
        'host' => parse_url(env('DATABASE_URL'), PHP_URL_HOST),
        'port' => parse_url(env('DATABASE_URL'), PHP_URL_PORT) ?? 5432,
        'database' => ltrim(parse_url(env('DATABASE_URL'), PHP_URL_PATH), '/'),
        'username' => parse_url(env('DATABASE_URL'), PHP_URL_USER),
        'password' => parse_url(env('DATABASE_URL'), PHP_URL_PASS),
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'require', 
    ],
];