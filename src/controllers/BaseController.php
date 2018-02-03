<?php
namespace StudentSignIn\Controllers;

use Slim\Container;

class BaseController {
    protected $container;

    // constructor receives container instance
    public function __construct(Container $container) {
        $this->container = $container;
    }

}