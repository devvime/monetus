<?php

namespace Pipu\Application\Service;

use Pipu\Shared\Helper\Mailer;

class TestMailerService
{
    public function execute($request, $response)
    {
        $mail = new Mailer();
        $mail->send([
            "title" => "Welcome!",
            "subject" => "Thanks for registering",
            "altbody" => "Your registration was successful.",
            "recipients" => [
                ["email" => "dihapp@outlook.com", "name" => "Victor"]
            ],
            "msgHTML" => "<p>Welcome to the app!</p>"
        ]);
        echo "ok!";
    }
}
