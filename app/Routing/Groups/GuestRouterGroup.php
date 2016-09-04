<?php namespace App\Routing\Groups;

use Phalcon\Mvc\Router\Group as RouterGroup;

/**
 * The guest router group should handle public facing routes, this may include
 * Registering, signing in, etc
 *
 */
class GuestRouterGroup extends RouterGroup
{
    public function initialize()
    {
        // Default paths
        $this->setPaths(
            array(
                'namespace'  => 'App\Http\Controllers',
                'controller' => 'guest'
            )
        );

        // All the routes start with /guest
        $this->setPrefix('/guest');

        $this->add(
            '/',
            array(
                'namespace'  => 'App\Http\Controllers',
                'action' => 'index'
            )
        );

        $this->add(
            '/login',
            array(
                'namespace'  => 'App\Http\Controllers',
                'action' => 'signin'
            )
        );

        $this->add(
            '/register',
            array(
                'namespace'  => 'App\Http\Controllers',
                'action' => 'register'
            )
        )->via(array("POST"));
    }
}