<?php

namespace Monetus\Services;

class UserService
{
    public static function registerUser($request, $response)
    {
        $name = $request->body->name;
        $email = $request->body->email;
        $password = $request->body->password;
    }
}
