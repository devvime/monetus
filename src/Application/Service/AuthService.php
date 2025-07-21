<?php

namespace Pipu\Application\Service;

use DomainException;
use Pipu\Shared\Token;
use Pipu\Application\Model\User;

class AuthService
{
    public function __construct(
        public User $user = new User()
    ) {}

    public function auth($request)
    {
        try {
            $user = $this->user->find('*', [
                "email" => $request->body->email
            ]);
            if (count($user) === 0) {
                return [
                    "error" => true,
                    "status" => 301,
                    "message" => "Email or password incorrect."
                ];
            }
            if (password_verify(
                $request->body->password,
                $user['password']
            )) {
                $token = Token::encode([
                    "user_id" => $user['id'],
                    "user_name" => $user['name'],
                    "user_email" => $user['email']
                ]);
                $_SESSION['user'] = $token;
                return [
                    "token" => $_SESSION['user']
                ];
            }
        } catch (DomainException $error) {
            throw new DomainException($error);
        }
    }

    public function logout()
    {
        unset($_SESSION['user']);
        session_destroy();
        return [
            "success" => true,
            "message" => "Logout successfully"
        ];
    }
}
