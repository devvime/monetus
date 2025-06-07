<?php

namespace Monetus\Services;

use Monetus\Database\Database;
use Monetus\Helpers\Token;

class AuthService
{
    public static function auth($request, $response)
    {
        $email = $request->body->email;
        $password = $request->body->password;

        $db = new Database();

        try {

            $user = $db->connect()->get('users', '*', [
                "email" => $email
            ]);

            if ($user === null) {
                $response->json([
                    "error" => true,
                    "status" => 301,
                    "message" => "Email or password incorrect."
                ]);
            }

            if (password_verify($password, $user['password'])) {

                $token = Token::encode([
                    "user_id" => $user['id'],
                    "user_name" => $user['name'],
                    "user_email" => $user['email']
                ]);

                $_SESSION['user'] = $token;

                $response->json([
                    "token" => $_SESSION['user']
                ]);

                return;
            }
        } catch (\Exception $e) {
            $response->json([
                "error" => true,
                "status" => 301,
                "message" => "Email or password incorrect."
            ]);
        }
    }

    public static function logout($request, $response)
    {
        unset($_SESSION['user']);
        session_destroy();
        $response->json([
            "success" => true,
            "message" => "Logout successfully"
        ]);
    }
}
