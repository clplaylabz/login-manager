<?php
use Cake\Routing\Route\DashedRoute;

$routes->plugin(
    'LoginManager',
    ['path' => '/login'],
    function ($routes) {
        $routes->setRouteClass(DashedRoute::class);
        $routes->connect('/', ['controller' => 'Users', 'action' => 'login'])->setMethods(['GET', 'POST']);
    }
);