<?php

namespace Monetus\Controllers;

use Monetus\Helpers\View;
use Monetus\Services\UserService;

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

    public function dashboard($request, $response)
    {
        View::render('dashboard/index');
    }

    public function users($request, $response)
    {
        $users = UserService::listAllUsers();
        View::render('users/list/index', $users);
    }
}