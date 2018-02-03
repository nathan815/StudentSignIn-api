<?php
/**
 * Application Routes
 */
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \StudentSignIn\Controllers;

$app->get('/hello/{name}', Controllers\HelloController::class.':index');