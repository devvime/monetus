<?php

use Pipu\Http\Dto\RegisterUserDTO;
use Pipu\Http\Dto\UpdateUserDTO;
use Pipu\Application\Controller\UserController;
use Pipu\Http\Middleware\AuthMiddleware;

$route->group('/api/user', AuthMiddleware::class . '@verify')
    ->init()
    ->get('', UserController::class . '@index')
    ->get('/{id}', UserController::class . '@show')
    ->post('', UserController::class . '@store', RegisterUserDTO::class . '@validate')
    ->put('/{id}', UserController::class . '@update', UpdateUserDTO::class . '@validate')
    ->delete('/{id}', UserController::class . '@destroy')
    ->endGroup();
