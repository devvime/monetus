<?php

use Modularis\Router;

$route = new Router();

require_once dirname(__DIR__) . '/src/Routes/view.php';
require_once dirname(__DIR__) . '/src/Routes/api.php';

$route->dispatch();