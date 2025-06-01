<?php

namespace Monetus\Controllers;

use Monetus\Services\UserService;
use Monetus\DTOs\RegisterUserDTO;
use Monetus\DTOs\AuthDTO;
use Monetus\Services\AuthService;

class AuthController
{
    public function auth($request, $response)
    {
        AuthDTO::validate($request->body);
        AuthService::auth($request, $response);
    }

    public function register($request, $response)
    {
        RegisterUserDTO::validate($request->body);
        UserService::registerUser($request, $response);
    }
}
