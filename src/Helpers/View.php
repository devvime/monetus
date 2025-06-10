<?php

namespace Monetus\Helpers;

class View
{
    public static function render(string $name, array $data = [])
    {
        self::setData($data);
        VIEW->draw('layout/header');
        VIEW->draw("$name");
        VIEW->draw('layout/footer');
    }

    public static function setData(array $data)
    {
        foreach ($data as $key => $value) {
            VIEW->assign($key, $value);
        }
    }
}