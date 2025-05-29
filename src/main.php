<?php

use Modularis\Router;
use Monetus\Controllers\ViewController;

$route = new Router();

$route->get('/', ViewController::class . '@home');
$route->get('/login', ViewController::class . '@login');

$route->dispatch();