<?php

use Pipu\Controllers\ViewController;
use Pipu\Middlewares\AuthMiddleware;

$route->get('/', ViewController::class . '@home');
$route->get('/login', ViewController::class . '@login');

$route->group('/dashboard', AuthMiddleware::class . '@verify')
    ->init()
    ->get('', ViewController::class . '@dashboard')
    ->get('/users', ViewController::class . '@users')
    ->endGroup();
