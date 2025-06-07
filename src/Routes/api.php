<?php

use Monetus\Controllers\AuthController;
use Monetus\Controllers\UserController;
use Monetus\Guards\AuthGuard;

# Login routes
$route->post('/api/login', AuthController::class . '@auth');
$route->post('/api/register', AuthController::class . '@register');

# User routes
$route->group('/api/user', AuthGuard::class . '@verify')
    ->init()
    ->get('', UserController::class . '@index')
    ->get('/{id}', UserController::class . '@show')
    ->post('', UserController::class . '@store')
    ->put('/{id}', UserController::class . '@update')
    ->delete('/{id}', UserController::class . '@destroy')
    ->endGroup();