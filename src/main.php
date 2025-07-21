<?php

use Modularis\Router;

$route = new Router();

require_once dirname(__DIR__) . '/src/Http/Routes/views.php';
require_once dirname(__DIR__) . '/src/Http/Routes/auth.php';
require_once dirname(__DIR__) . '/src/Http/Routes/user.php';

$route->dispatch();
