<?php

namespace Pipu\Application\Service;

use Pipu\Shared\Helper\Mailer;

class TestMailerService
{
    public function execute($request, $response)
    {
        $mail = new Mailer();
        try {
            $mail->send([
                "title" => "Test mailer title",
                "subject" => "Test subject",
                "altbody" => "Test altbody",
                "recipients" => [
                    [
                        "email" => "dihapp@outlook.com",
                        "name" => "Victor"
                    ]
                ],
                "msgHTML" => "<h1>Test mailler</h1>"
            ]);
            echo "ok!";
        } catch (\Exception $error) {
            echo $error;
        }
    }
}
