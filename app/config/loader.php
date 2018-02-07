<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->modelsDir
    ]
)->register();

$loader->registerNamespaces([
    'Tf\Models'      => $config->application->modelsDir,
    'Tf\Controllers' => $config->application->controllersDir,
    'Tf\Lib'         => $config->application->libraryDir
])->register();

