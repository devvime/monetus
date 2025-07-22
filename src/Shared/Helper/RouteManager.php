<?php

namespace Pipu\Shared\Helper;

use Exception;

class RouteManager
{
    public static function use($route, string $name)
    {
        try {
            require ROOT . "/src/Http/Routes/{$name}.php";
        } catch (Exception $error) {
            echo $error;
        }
    }
}
