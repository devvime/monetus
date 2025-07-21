<?php

namespace Pipu\Application\Controller;

use Pipu\Shared\View;
use Pipu\Application\Service\UserService;

class ViewController
{
    public function home($request, $response)
    {
        View::render('components/layout/header');
        View::render('pages/home/index');
        View::render('components/layout/footer');
    }

    public function login($request, $response)
    {
        View::render('components/layout/header');
        View::render('pages/login/index');
        View::render('pages/login/registerModal/index');
        View::render('components/layout/footer');
    }

    public function dashboard($request, $response)
    {
        View::render('components/layout/header');
        View::render('pages/dashboard/menu/index');
        View::render('pages/dashboard/index');
        View::render('components/layout/footer');
    }

    public function users($request, $response)
    {
        $userService = new UserService();
        $users = $userService->listAllUsers($request->query);
        View::render('components/layout/header');
        View::render('pages/dashboard/menu/index');
        View::render('pages/users/list/index', [
            "users" => $users
        ]);
        View::render('components/layout/footer');
    }
}
