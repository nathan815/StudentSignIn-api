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
    'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
    'level' => \Monolog\Logger::DEBUG,
];

//git commit -m "Created files for dependencies, middleware, settings, and routes and included them in index.php. "