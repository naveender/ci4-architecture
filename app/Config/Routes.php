<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::defaulthome');
$routes->group('admin', ['filter' => 'session'], function($routes) {
    $routes->get('dashboard', 'AdminController::index');
    $routes->get('account-settings', 'AdminController::accountsettings');
    // Add other admin routes here
});

$routes->group('dealer', ['filter' => 'session'], function($routes) {
    $routes->get('create-dealer', 'DealerController::index');
    $routes->post('add-dealer', 'DealerController::add');
    // Add other dealer routes here
});

service('auth')->routes($routes);

