<?php

namespace Pipu\Http\Dto;

use Pipu\Shared\Helper\Dto;

class AuthDTO extends Dto
{
    public array $allowed = ['email', 'password'];
    public array $rules = [
        'email' => ['required', 'email'],
        'password' => ['required', ['length', 3, 20], 'alpha']
    ];
}
