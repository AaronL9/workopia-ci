<?php

use App\Controllers\HomeController;
use App\Controllers\JobController;
use App\Controllers\UserController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [HomeController::class, 'index']);
$routes->get('jobs/(:segment)', [JobController::class, 'show']);

// User routes
$routes->get('/register', [UserController::class, 'register']);
$routes->get('/login', [UserController::class, 'login']);
$routes->post('/register', [UserController::class, 'create']);
$routes->post('/login', [UserController::class, 'authenticate']);