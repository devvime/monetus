<?php

namespace Pipu\Models;

use Pipu\Helpers\Model;

class User extends Model
{

    public string $table = 'users';
    public array $fields = [
        'id',
        'name',
        'email',
        'avatar',
        'super_user',
        'created_at',
        'updated_at'
    ];
}
