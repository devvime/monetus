<?php

namespace Monetus\Controllers;

use Monetus\Database\Database;

class AuthController
{
    public function login($request, $response)
    {
        $email = $request->body->email;
        $password = $request->body->password;

        $db = new Database();

    }
}