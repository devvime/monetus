<?php

namespace Monetus\Helpers;

class View
{
    public static function render(string $name)
    {
        $view = new View();
        include dirname(__DIR__) . '/Views/layout/header.php';
        include dirname(__DIR__) . "/Views/{$name}.php";
        include dirname(__DIR__) . '/Views/layout/footer.php';
    }

    public static function add(string $name)
    {
        include dirname(__DIR__) . "/Views/{$name}.php";
    }
}