<?php

use Phalcon\Config\Adapter\Ini as ConfigIni;

// Read the configuration
$config = new ConfigIni(APP_PATH . 'app/config/config.ini');

$loader = new Phalcon\Loader();

// We're a registering a set of directories taken from the configuration file
$loader->registerDirs(
    [
        APP_PATH . $config->application->controllersDir,
        APP_PATH . $config->application->pluginsDir,
        APP_PATH . $config->application->libraryDir,
        APP_PATH . $config->application->modelsDir,
        APP_PATH . $config->application->formsDir,
    ]
)->register();