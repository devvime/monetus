<?php

namespace Pipu\Http\Middleware;

use Pipu\Shared\Token;

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
