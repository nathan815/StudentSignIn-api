<?php
/**
 * Loads config variables from all config files
 */
require __DIR__ . '/../helpers/env_helper.php';

// Set up dotenv if ENVIRONMENT is not production
if(env('ENVIRONMENT') != 'production') {
    try {
        $dotenv = new Dotenv\Dotenv(__DIR__ . '/../../');
        $dotenv->load();
    } catch(Dotenv\Exception\InvalidPathException $e) {
        die('Error: .env file not found');
    }
}

// Set up the config variable
$config = [];

// Require each config file
require __DIR__ . '/application.php';
require __DIR__ . '/database.php';

return $config;