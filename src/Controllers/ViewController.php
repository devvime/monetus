<?php

namespace Pipu\Controllers;

use Pipu\Helpers\View;
use Pipu\Services\UserService;

class ViewController
{
    public function home($request, $response)
    {
        View::render('layout/header');
        View::render('home/index');
        View::render('layout/footer');
    }

    public function login($request, $response)
    {
        View::render('layout/header');
        View::render('login/index');
        View::render('login/registerModal/index');
        View::render('layout/footer');
    }

    public function dashboard($request, $response)
    {
        View::render('layout/header');
        View::render('dashboard/menu/index');
        View::render('dashboard/index');
        View::render('layout/footer');
    }

    public function users($request, $response)
    {
        $userService = new UserService();
        $users = $userService->listAllUsers();
        View::render('layout/header');
        View::render('dashboard/menu/index');
        View::render('users/list/index', [
            "users" => $users
        ]);
        View::render('layout/footer');
    }
}
