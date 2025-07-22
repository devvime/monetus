<?php

use Modularis\Router;
use Pipu\Shared\Helper\RouteManager;

$route = new Router();

RouteManager::use($route, 'views');
RouteManager::use($route, 'auth');
RouteManager::use($route, 'user');

$route->dispatch();
