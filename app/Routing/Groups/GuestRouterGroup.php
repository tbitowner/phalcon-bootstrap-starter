<?php namespace App\Routing\Groups;

use Phalcon\Mvc\Router\Group as RouterGroup;

class GuestRouterGroup extends RouterGroup
{
    public function initialize()
    {
        // Default paths
        $this->setPaths(
            array(
                'module'    => 'blog',
                'namespace' => 'Blog\Controllers'
            )
        );

        // All the routes start with /blog
        $this->setPrefix('/blog');

        // Add a route to the group
        $this->add(
            '/save',
            array(
                'action' => 'save'
            )
        );

        // Add another route to the group
        $this->add(
            '/edit/{id}',
            array(
                'action' => 'edit'
            )
        );

        // This route maps to a controller different than the default
        $this->add(
            '/blog',
            array(
                'controller' => 'blog',
                'action'     => 'index'
            )
        );
    }
}