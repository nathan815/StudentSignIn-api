<?php
/**
 * Application Routes
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \StudentSignIn\Controllers;

$app->get('/hello', Controllers\HelloController::class.':index');