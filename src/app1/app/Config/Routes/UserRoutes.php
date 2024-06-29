<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('api/u', ['namespace' => 'App\Controllers\Users'], function ($routes) {
  $routes->get('registration', 'RegistrationController::index');
});