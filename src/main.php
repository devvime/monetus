<?php

use Modularis\Router;
use Pipu\Shared\Helper\RouteManager;

$route = new Router();

RouteManager::register($route, 'views');
RouteManager::register($route, 'auth');
RouteManager::register($route, 'user');

$route->dispatch();
