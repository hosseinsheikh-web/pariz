<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();
$routes->add('users',
    new Route(constant('URL_SUBFOLDER') . '/user/{id}',
        ['controller' =>
            'UserController',
            'method' => 'store'],
        ['id' => '[0-9]+']
    ));