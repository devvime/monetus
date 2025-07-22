<?php

namespace Pipu\Http\Dto;

use Pipu\Shared\Helper\Dto;

class RegisterUserDTO extends Dto
{
    public array $allowed = ['name', 'email', 'password'];
    public array $rules = [
        'name' => ['required'],
        'email' => ['required', 'email'],
        'password' => ['required']
    ];
}
