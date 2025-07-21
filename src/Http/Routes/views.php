<?php

use Pipu\Application\Controller\ViewController;
use Pipu\Http\Middleware\AuthMiddleware;

$route->get('/', ViewController::class . '@home');
$route->get('/login', ViewController::class . '@login');

$route->group('/dashboard', AuthMiddleware::class . '@verify')
    ->init()
    ->get('', ViewController::class . '@dashboard')
    ->get('/users', ViewController::class . '@users')
    ->endGroup();
