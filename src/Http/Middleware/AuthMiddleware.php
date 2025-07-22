<?php

namespace Pipu\Http\Middleware;

use Pipu\Shared\Token;
use Pipu\Shared\Helper\Redirect;

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
            return Redirect::route('/login');
        }
    }
}
