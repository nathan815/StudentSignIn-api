<?php
/**
 * Main Application Configuration
 */

$config['appName'] = env('APP_NAME', 'App');
$config['displayErrorDetails'] = env('DISPLAY_ERROR_DETAILS', true);
$config['addContentLengthHeader'] = false;

$config['renderer'] = [
    'template_path' => __DIR__ . '/../templates/',
];

$config['logger'] = [
    'name' => $config['appName'],
    'path' => env('docker') ? 'php://stdout' : __DIR__ . '/../../' . env('APP_LOG_FILE', 'logs/app.log'),
    'level' => \Monolog\Logger::DEBUG,
];