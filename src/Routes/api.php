<?php

use Monetus\Controllers\AuthController;

$route->post('/api/login', AuthController::class . '@login');