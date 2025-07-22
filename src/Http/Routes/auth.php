<?php

use Pipu\Http\Dto\AuthDTO;
use Pipu\Application\Controller\AuthController;

$route->post('/api/auth', AuthController::class . '@auth', AuthDTO::class . '@validate');
$route->post('/api/logout', AuthController::class . '@logout');
$route->post('/api/register', AuthController::class . '@register');
