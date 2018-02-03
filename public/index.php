<?php
require '../vendor/autoload.php';

use \Slim\App;

$config = require __DIR__ . '/../src/config/load.php';

$app = new \Slim\App(['settings' => $config]);

require __DIR__ . '/../src/config/dependencies.php';
require __DIR__ . '/../src/config/middleware.php';
require __DIR__ . '/../src/config/routes.php';

$app->run();