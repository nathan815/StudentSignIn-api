<?php
/**
 * Application Routes
 */

$app->get('/hello/{name}', function (Request $req,  Response $res, $args = []) {
    $name = $args['name'];
    $res->getBody()->write("Hello, $name");
    return $res;
});