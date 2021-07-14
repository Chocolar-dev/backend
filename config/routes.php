<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

/** @var \Cake\Routing\RouteBuilder $routes */
$routes->setRouteClass(DashedRoute::class);

$routes->scope('/', function (RouteBuilder $builder) {

    $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

    $builder->connect('/pages/*', 'Pages::display');

    $builder->fallbacks();
});


$routes->scope('/api', function (RouteBuilder $builder) {
    // No $builder->applyMiddleware() here.

    // Parse specified extensions from URLs
    // $builder->setExtensions(['json', 'xml']);

    $builder->get('/categories', ['controller' => 'Categories', 'action' => 'get']);
    $builder->get('/sub-categories', ['controller' => 'SubCategories', 'action' => 'get']);
    $builder->get('/products', ['controller' => 'Products', 'action' => 'get']);
    $builder->get('/origins', ['controller' => 'Origins', 'action' => 'get']);
});
