<?php

use Pipu\Application\Controller\ViewController;
use Pipu\Http\Middleware\AuthMiddleware;

use Pipu\Application\Service\TestMailerService;

$route->get('/test/mailer', TestMailerService::class . '@execute');

$route->get('/', ViewController::class . '@home');
$route->get('/login', ViewController::class . '@login');

$route->group('/dashboard', AuthMiddleware::class . '@verify')
    ->init()
    ->get('', ViewController::class . '@dashboard')
    ->get('/users', ViewController::class . '@users')
    ->endGroup();
