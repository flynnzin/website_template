<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Illuminate\Container\Container;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

// Create a new application container instance
$app = new Container;

// Bind the application instance to the container
$app->instance('app', $app);

// Register service providers
foreach (glob(__DIR__ . '/../app/Providers/*.php') as $provider) {
    require_once $provider;
    $class = basename($provider, '.php');
    $app->register(new $class);
}

// Load configuration files
foreach (glob(__DIR__ . '/../config/*.php') as $config) {
    $app->configure(basename($config, '.php'));
}

// Set up Facades
Facade::setFacadeApplication($app);

// Return the application instance
return $app;