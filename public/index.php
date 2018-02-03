<?php
require '../vendor/autoload.php';

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Slim\App;

$settings = require __DIR__ . '/../src/config/application.php';

$app = new \Slim\App(['settings' => $settings]);

require __DIR__ . '/../src/config/dependencies.php';
require __DIR__ . '/../src/config/middleware.php';
require __DIR__ . '/../src/config/routes.php';

$app->run();