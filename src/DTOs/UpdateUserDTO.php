<?php

namespace Pipu\DTOs;

use Pipu\Helpers\DTO;

class UpdateUserDTO extends DTO
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password
    ) {}

    public static function validate(array | object $data)
    {
        self::obstruct('Super User', $data->super_user);
        self::obstruct('Created at', $data->created_at);
        self::isEmail('Email', $data->email);
    }
}
