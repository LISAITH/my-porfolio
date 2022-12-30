<?php

namespace App\Notification;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;

class EmailNotifier
{
    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function generiqueNotification()
    {
        $email = (new TemplatedEmail())
            ->from(new Address('noreply@dec-benin.bj', 'SIGCRAI'))
            ->to('lisboaleonce86@gmail.com')
            ->priority(Email::PRIORITY_HIGH)
            ->subject('Générique mail test')
            ->htmlTemplate('mail/generique.html.twig');

        $this->mailer->send($email);
    }
}