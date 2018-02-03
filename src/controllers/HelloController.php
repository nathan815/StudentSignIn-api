<?php
namespace StudentSignIn\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \StudentSignIn\Controllers\Controller;

class HelloController extends BaseController {

    public function index(Request $req,  Response $response, $args = []) {
        $name = $args['name'];
        $result = $this->container->db->query('SELECT * FROM test');
        $data = [];
        foreach($result as $row) {
            $data[] = $row;
        } 
        return $response->withJson($data);
    }

}