<?php

namespace Monetus\Helpers;

class View
{
    public static function render(string $name)
    {
        include dirname(__DIR__) . '/Views/header.php';
        include dirname(__DIR__) . "/Views/{$name}.php";
        include dirname(__DIR__) . '/Views/footer.php';
    }

    public static function add(string $name)
    {
        include dirname(__DIR__) . "/Views/{$name}.php";
    }
}