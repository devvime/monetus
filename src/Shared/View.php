<?php

namespace Pipu\Shared;

use Error;

class View
{
    public static function getFile(string $name): string
    {
        try {
            $file = file_get_contents(VIEWS_DIR . "/{$name}.html");
            return $file;
        } catch (\Exception $err) {
            throw new Error($err);
        }
    }

    public static function render(string $name, array $data = [])
    {
        $m = new \Mustache\Engine(['entity_flags' => ENT_QUOTES]);
        echo $m->render(self::getFile($name), $data);
    }
}
