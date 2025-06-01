<?php

namespace Monetus\Controllers;

use Monetus\Services\UserService;
use Monetus\DTOs\RegisterUserDTO;

class AuthController
{
    public function login($request, $response)
    {
        $email = $request->body->email;
        $password = $request->body->password;
    }

    public function register($request, $response)
    {
        RegisterUserDTO::validate($request->body);
        UserService::registerUser($request, $response);
    }
}
