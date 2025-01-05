<?php

use App\Controllers\HomeController;
use App\Controllers\JobController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [HomeController::class, 'index']);
$routes->get('jobs/(:segment)', [JobController::class, 'show']);
