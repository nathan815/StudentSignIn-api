<?php
/**
 * Application Dependencies
 */

$container = $app->getContainer();

$container['logger'] = function($c) {
    $logger = new \Monolog\Logger($c['settings']['logger']['name']);
    $file_handler = new \Monolog\Handler\StreamHandler($c['settings']['logger']['path']);
    $logger->pushHandler($file_handler);
    return $logger;
};

$container['db'] = function ($c) {
    $db = $c['settings']['db'];
    try {
        $conn = "{$db['engine']}:host={$db['host']};dbname={$db['database']};charset={$db['charset']}";
        $pdo = new PDO($conn, $db['username'], $db['password'], $db['pdo_options']);
        return $pdo;
    } catch(PDOException $e) {
        echo 'PDO Error: '.$e;
    }
};
