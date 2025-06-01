<?php

use Monetus\Controllers\AuthController;

$route->post('/api/login', AuthController::class . '@login');
$route->post('/api/register', AuthController::class . '@register');