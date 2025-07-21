<?php

use Pipu\Application\Controller\UserController;
use Pipu\Http\Middleware\AuthMiddleware;

$route->group('/api/user', AuthMiddleware::class . '@verify')
    ->init()
    ->get('', UserController::class . '@index')
    ->get('/{id}', UserController::class . '@show')
    ->post('', UserController::class . '@store')
    ->put('/{id}', UserController::class . '@update')
    ->delete('/{id}', UserController::class . '@destroy')
    ->endGroup();
