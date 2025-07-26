<?php

namespace Pipu\Http\Controller;

use Pipu\Shared\View;
use Pipu\Application\Service\UserService;
use Pipu\Application\UseCase\User\ActiveAccount;

class ViewController
{
    public function __construct(
        private ActiveAccount $activeAccount = new ActiveAccount(),
        private UserService $userService = new UserService()
    ) {}

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
        View::render('pages/login/recoverPasswordModal/recover-password-modal');
        View::render('components/layout/footer');
    }

    public function activeAccount($request, $response)
    {
        $this->activeAccount->execute($request->params['token']);
        View::render('components/layout/header');
        View::render('pages/login/activeAccount/active-account');
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
        $result = $this->userService->listAllUsers($request->query);
        View::render('components/layout/header');
        View::render('pages/dashboard/menu/menu');
        View::render('pages/users/list/list', $result);
        View::render('components/shared/pagination/pagination', $result);
        View::render('components/layout/footer');
    }
}
