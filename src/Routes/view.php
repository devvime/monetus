<?php

use Monetus\Controllers\ViewController;
use Monetus\Guards\AuthGuard;

$route->get('/', ViewController::class . '@home');
$route->get('/login', ViewController::class . '@login');

$route->group('/dashboard', AuthGuard::class . '@verify')
    ->init()
    ->get('', ViewController::class . '@dashboard')
    ->get('/users', ViewController::class . '@users')
    ->endGroup();