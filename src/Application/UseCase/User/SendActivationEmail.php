<?php

namespace Pipu\Application\UseCase\User;

use DomainException;
use Error;
use Pipu\Shared\Helper\Mailer;
use Pipu\Shared\Token;
use Pipu\Shared\View;

class SendActivationEmail
{
    public function __construct(
        private Mailer $mailer = new Mailer()
    ) {}

    public function execute(array $user)
    {
        try {
            $token = $token = Token::encode([
                "user_name" => $user['name'],
                "user_email" => $user['email']
            ]);
            $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? "https" : "http";
            $host = $_SERVER['HTTP_HOST'];
            $this->mailer->send([
                "title" => "Welcome {$user['name']}!",
                "subject" => "Active your account",
                "altbody" => "Welcome to app {$user['name']}!",
                "msgHTML" => View::get('components/email/active-account', [
                    "link" => "{$protocol}://{$host}/account/active/{$token}",
                    "name" => $user['name']
                ]),
                "recipients" => [
                    ["name" => $user['name'], "email" => $user['email']]
                ]
            ]);
            return true;
        } catch (DomainException $error) {
            throw new Error($error);
        }
    }
}
