<?php
/**
 * Database Connection Cnnfiguration
 */

$config['db'] = [
    'driver'    => env('DB_DRIVER', 'mysql'),
    'host'      => env('DB_HOST', 'localhost'),
    'database'  => env('DB_NAME'),
    'username'  => env('DB_USER'),
    'password'  => env('DB_PASS'),
    'charset'   => env('DB_CHARSET', 'utf8'),
    'collation' => env('DB_COLLATION', 'utf8_unicode_ci'),
    'prefix'    => env('DB_PREFIX'),

    'pdo_options' => [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => true,
    ]
];