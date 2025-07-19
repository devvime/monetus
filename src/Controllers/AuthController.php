<?php

namespace Pipu\Controllers;

use Pipu\Services\UserService;
use Pipu\DTOs\RegisterUserDTO;
use Pipu\DTOs\AuthDTO;
use Pipu\Services\AuthService;

class AuthController
{
    public function __construct(
        public UserService $userService = new UserService(),
        public AuthService $authService = new AuthService(),
    ) {}

    public function auth($request, $response)
    {
        AuthDTO::validate($request->body);
        $result = $this->authService->auth($request);
        $response->json($result);
    }

    public function register($request, $response)
    {
        RegisterUserDTO::validate($request->body);
        $result = $this->userService->registerUser($request, $response);
        $response->json($result);
    }

    public function logout($request, $response)
    {
        $result = $this->authService->logout($request, $response);
        $response->json($result);
    }
}
