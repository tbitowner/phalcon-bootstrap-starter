<?php

use Phalcon\Mvc\Router;
use App\Routing\Groups\GuestRouterGroup;

// Create the router
$router = new Router();

$router->setDefaultNamespace('App\Http\Controllers');

$router->mount(new GuestRouterGroup());
