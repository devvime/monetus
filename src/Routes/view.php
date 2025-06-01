<?php

use Monetus\Controllers\ViewController;
use Monetus\Middlewares\AuthMiddleware;

$route->get('/', ViewController::class . '@home');
$route->get('/login', ViewController::class . '@login');
$route->get('/dashboard', ViewController::class . '@dashboard', AuthMiddleware::class . '@verify');