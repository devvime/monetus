<?php

namespace Monetus\Guards;

use Monetus\Helpers\Token;

class AuthGuard
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