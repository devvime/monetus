<?php

namespace Monetus\Services;

use Monetus\Database\Database;
use Monetus\Helpers\Token;

class UserService
{
    public static function registerUser($request, $response)
    {
        $name = $request->body->name;
        $email = $request->body->email;
        $password = password_hash($request->body->password, PASSWORD_DEFAULT);

        $db = new Database();
        
        try {
            $db->connect()->insert('users', [
                "name" => $name,
                "email" => $email,
                "password" => $password
            ]);

            $response->json([
                "status" => 200,
                "message" => "User registered succesfully!"
            ]);

        } catch (\Exception $e) {
            $response->json([
                "error" => true,
                "message" => "User registration failed.",
                "exception" => $e
            ]);
        }
    }
}
