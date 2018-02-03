<?php
/**
 * Application Routes
 */
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/hello/{name}', function (Request $req,  Response $res, $args = []) {
    $name = $args['name'];
    $result = $this->db->query('SELECT * FROM test');
    foreach($result as $row) {
        echo '<br>';
        echo 'id: '.$row['id'];
        echo ', name: '.$row['name'];
    }
    $res->getBody()->write("Hello, $name");
    return $res;
});