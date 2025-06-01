<?php

namespace Monetus\Middlewares;

use Monetus\Helpers\Token;

class AuthMiddleware
{
    public function verify()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
        }

        if (isset($_SESSION['user']) && Token::decode($_SESSION['user'])) {
            return true;
        } else {
            header('Location: /login');
        }
    }
}