<?php
/**
 * Application Dependencies
 */

use \StudentSignIn\Controllers;

$container = $app->getContainer();

// Register dependencies
$container['logger'] = function($c) {
    $logger = new \Monolog\Logger($c['settings']['logger']['name']);
    $file_handler = new \Monolog\Handler\StreamHandler($c['settings']['logger']['path']);
    $logger->pushHandler($file_handler);
    return $logger;
};

$container['db'] = function ($c) {
    $db = $c['settings']['db'];
    try {
        $conn = "{$db['driver']}:host={$db['host']};dbname={$db['database']};charset={$db['charset']}";
        $pdo = new PDO($conn, $db['username'], $db['password'], $db['pdo_options']);
        return $pdo;
    } catch(PDOException $e) {
        $c->logger->error($e);
        throw new PDOException($e);
    }
};

// Register controllers with their dependencies

$container[Controllers\HelloController::class] = function($c) {
    $db = $c->get('db');
    return new Controllers\HelloController($db);
};