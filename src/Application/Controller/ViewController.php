<?php

namespace Pipu\Application\Controller;

use Pipu\Shared\View;
use Pipu\Application\Service\UserService;

class ViewController
{
    public function home($request, $response)
    {
        View::render('components/layout/header');
        View::render('pages/home/home');
        View::render('components/layout/footer');
    }

    public function login($request, $response)
    {
        View::render('components/layout/header');
        View::render('pages/login/login');
        View::render('pages/login/registerModal/registerModal');
        View::render('components/layout/footer');
    }

    public function dashboard($request, $response)
    {
        View::render('components/layout/header');
        View::render('pages/dashboard/menu/menu');
        View::render('pages/dashboard/dashboard');
        View::render('components/layout/footer');
    }

    public function users($request, $response)
    {
        $userService = new UserService();
        $result = $userService->listAllUsers($request->query);
        View::render('components/layout/header');
        View::render('pages/dashboard/menu/menu');
        View::render('pages/users/list/list', $result);
        View::render('components/shared/pagination/pagination', $result);
        View::render('components/layout/footer');
    }
}
