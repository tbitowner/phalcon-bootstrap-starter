<?php 

use Phalcon\Mvc\Application;
use Phalcon\DI\FactoryDefault;
use Phalcon\Mvc\View;
use Phalcon\Session\Adapter\Files as Session;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;
use Phalcon\Mvc\Url;

// Create a DI
$di = new FactoryDefault();

// Set the base url
$di->set('url', function () {
    $url = new Url();
    $url->setBaseUri('/');
    return $url;
});

// Start the session the first time a component requests the session service
$di->set('session', function () {
    $session = new Session();

    $session->start();

    return $session;
});

// Database connection is created based on parameters defined in the configuration file
$di->set('db', function () use ($config) {
    return new DbAdapter(
        [
            "host"     => $config->database->host,
            "username" => $config->database->username,
            "password" => $config->database->password,
            "dbname"   => $config->database->name
        ]
    );
});

/**
 * Add routing capabilities
 */
$di->set(
    'router',
    function () {
        require __DIR__.'/routes.php';

        return $router;
    }, true
);

// Register Volt as template engine
$di->set('view', function () {

    $view = new View();

    $view->setViewsDir('../resources/views/');

    $view->registerEngines(
        array(
            ".volt" => 'Phalcon\Mvc\View\Engine\Volt'
        )
    );

    return $view;
});

$di->set('simpleView', function () {

    $simpleView = new SimpleView();

    $simpleView->setViewsDir('../resources/views/');

    return $simpleView;
});

$application = new Application($di);

$response = $application->handle();

$response->send();

return $di;