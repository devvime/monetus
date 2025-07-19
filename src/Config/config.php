<?php

define('ROOT', dirname(dirname(__DIR__)));

define('VIEWS_DIR', __DIR__ . "/../Views");

session_set_cookie_params([
    'lifetime' => 0,
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
]);

session_start();
session_regenerate_id(true);

try {
    $dotenv = Dotenv\Dotenv::createImmutable(ROOT)->load();
} catch (\Exception $error) {
    echo ".env not found";
}

define('DATABASE_SERVER', $_ENV['DATABASE_SERVER']);
define('DATABASE_TYPE', $_ENV['DATABASE_TYPE']);
define('DATABASE_NAME', $_ENV['DATABASE_NAME']);
define('DATABASE_USER', $_ENV['DATABASE_USER']);
define('DATABASE_PASSWORD', $_ENV['DATABASE_PASSWORD']);
define('SECRET', $_ENV['SECRET']);
