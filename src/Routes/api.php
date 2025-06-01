<?php

use Monetus\Controllers\AuthController;

$route->post('/api/login', AuthController::class . '@auth');
$route->post('/api/register', AuthController::class . '@register');