<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
require '../vendor/autoload.php';

use \Slim\App;

$app = new \Slim\App();
$app->get('/hello/{name}', function (Request $req,  Response $res, $args = []) {
    $name = $args['name'];
    $res->getBody()->write("Hello, $name");
    return $res;
});
$app->run();