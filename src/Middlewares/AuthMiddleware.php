<?php

namespace Pipu\Middlewares;

use Pipu\Helpers\Token;

class AuthMiddleware
{
    public function verify($request, $response)
    {
        if (
            isset($_SESSION['user']) &&
            Token::decode($_SESSION['user'])
        ) {
            return true;
        } else {
            $response->json([
                "status" => 301,
                "message" => "Unauthorized access"
            ]);
            exit;
        }
    }
}
