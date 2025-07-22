<?php

namespace Pipu\Application\Controller;

use Pipu\Application\Service\UserService;
use Pipu\Application\Service\AuthService;

class AuthController
{
    public function __construct(
        public UserService $userService = new UserService(),
        public AuthService $authService = new AuthService(),
    ) {}

    public function auth($request, $response)
    {
        $result = $this->authService->auth($request);
        $response->json($result);
    }

    public function register($request, $response)
    {
        $result = $this->userService->registerUser($request, $response);
        $response->json($result);
    }

    public function logout($request, $response)
    {
        $result = $this->authService->logout($request, $response);
        $response->json($result);
    }
}
