<?php

namespace Pipu\Shared\Helper;

use PHPMailer\PHPMailer\PHPMailer;

class Mailer
{

    public $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer();
        $this->mail->isSMTP();
        $this->mail->Host = EMAIL_HOST;
        $this->mail->Port = EMAIL_PORT;
        $this->mail->SMTPAuth = true;
        $this->mail->Username = EMAIL_USER;
        $this->mail->Password = EMAIL_PASSWORD;
    }

    public function send($data = [])
    {
        $this->mail->setFrom(EMAIL_USER, $data['title'] || $data['subject']);
        $this->mail->Subject = $data['subject'];
        $this->mail->AltBody = $data['altbody'];
        foreach ($data['recipients']  as $recipient) {
            $this->mail->addAddress($recipient['email'], $recipient['name']);
        }
        $this->mail->msgHTML($data['msgHTML']);
        $this->mail->send();
    }
}
