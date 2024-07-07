<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('api/v1/users', ['namespace' => 'App\Controllers\Users'], function ($routes) {
  $routes->get('/', 'MainUsersController::index');
  $routes->get('registration', 'RegistrationController::index');
});