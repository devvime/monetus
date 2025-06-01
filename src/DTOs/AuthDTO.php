<?php

namespace Monetus\DTOs;

class AuthDTO extends DTO
{
    public function __construct(
        public string $email,
        public string $password
    ) {}

    public static function validate(array | object $data)
    {
        self::isEmail('Email', $data->email);
        self::required('password', $data->password);
        self::obstruct('super_user', $data->super_user);
    }
}