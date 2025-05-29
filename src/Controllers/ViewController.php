<?php

namespace Monetus\Controllers;

use Monetus\Helpers\View;

class ViewController
{
    public function home($request, $response)
    {
        View::render('home/index');
    }

    public function login($request, $response)
    {
        View::render('login/index');
    }
}