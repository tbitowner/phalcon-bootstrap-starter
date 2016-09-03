<?php

use Phalcon\Mvc\Router;
use App\Routing\Groups\GuestRouterGroup;

// Create the router
$router = new Router();

$router->mount(new GuestRouterGroup());
