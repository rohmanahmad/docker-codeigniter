<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\Home\WelcomeController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [WelcomeController::class, 'index']);