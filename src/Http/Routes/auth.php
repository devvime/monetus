<?php

use Pipu\Application\Controller\AuthController;

$route->post('/api/auth', AuthController::class . '@auth');
$route->post('/api/logout', AuthController::class . '@logout');
$route->post('/api/register', AuthController::class . '@register');
