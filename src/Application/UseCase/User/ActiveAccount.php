<?php

namespace Pipu\Application\UseCase\User;

use DomainException;
use Pipu\Shared\Token;
use Pipu\Application\Repository\User;

class ActiveAccount
{
    public function __construct(
        private User $user = new User()
    ) {}

    public function execute(string $token)
    {
        try {
            $user = Token::decode($token);
            $this->user->active($user->user_email);
        } catch (DomainException $error) {
            throw new DomainException($error);
        }
    }
}
