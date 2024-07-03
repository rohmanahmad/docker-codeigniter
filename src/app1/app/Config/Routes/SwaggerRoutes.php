<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('documentation/v1', ['namespace' => 'App\Controllers\Swagger'], function ($routes) {
  $routes->get('', 'MainController::index');
  $routes->get('json', 'JsonSpecController::index');
});