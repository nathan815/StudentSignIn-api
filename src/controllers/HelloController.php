<?php
namespace StudentSignIn\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \StudentSignIn\Controllers\Controller;

class HelloController {

    private $db;

    public function __construct(\PDO $db) {
        $this->db = $db;
    }

    public function index(Request $req,  Response $response) {
        $result = $this->db->query('SELECT * FROM test');
        $data = [];
        foreach($result as $row) {
            $data[] = $row;
        } 
        return $response->withJson($data);
    }

}