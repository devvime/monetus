<?php

use Pipu\Http\Controller\ViewController;
use Pipu\Http\Middleware\AuthMiddleware;

$route->get('/', ViewController::class . '@home');
$route->get('/login', ViewController::class . '@login');
$route->get('/account/active/{token}', ViewController::class . '@activeAccount');

$route->group('/dashboard', AuthMiddleware::class . '@verify')
    ->init()
    ->get('', ViewController::class . '@dashboard')
    ->get('/users', ViewController::class . '@users')
    ->endGroup();
