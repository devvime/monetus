<?php

namespace Pipu\Http\Dto;

use Pipu\Shared\Helper\Dto;

class UpdateUserDTO extends Dto
{
    public array $allowed = ['name', 'email', 'password', 'avatar'];
    public array $rules = [
        'email' => ['email']
    ];
}
