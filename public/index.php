<?php
require '../vendor/autoload.php';

use \Slim\App;

$config = require __DIR__ . '/../src/config/load.php';

$app = new \Slim\App(['settings' => $config]);
$app->getContainer()['config'] = $config;

require __DIR__ . '/../src/dependencies.php';
require __DIR__ . '/../src/middleware.php';
require __DIR__ . '/../src/routes.php';

$app->run();