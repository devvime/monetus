<?php

use Modularis\Router;

$route = new Router();

require_once dirname(__DIR__) . '/src/Routes/views.php';
require_once dirname(__DIR__) . '/src/Routes/auth.php';
require_once dirname(__DIR__) . '/src/Routes/user.php';

$route->dispatch();
