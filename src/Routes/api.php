<?php

use Monetus\Controllers\AuthController;
use Monetus\Controllers\UserController;

# Login routes
$route->post('/api/login', AuthController::class . '@auth');
$route->post('/api/register', AuthController::class . '@register');

# User routes
# TO DO: Auth Verify
$route->get('/api/user', UserController::class . '@index');
$route->get('/api/user/{id}', UserController::class . '@show');
$route->post('/api/user', UserController::class . '@store');
$route->put('/api/user/{id}', UserController::class . '@update');
$route->delete('/api/user/{id}', UserController::class . '@destroy');