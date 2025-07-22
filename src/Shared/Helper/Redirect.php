<?php

namespace Pipu\Shared\Helper;

class Redirect
{
    public static function route(string $path)
    {
        header("Location: {$path}");
    }
}
