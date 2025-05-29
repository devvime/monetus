<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class Users extends AbstractSeed
{
    public function run(): void
    {
        $data = [
            [
                "name" => "Steve",
                "email" => "steve@pm.com",
                "password" => "steve_boladão"
            ],
            [
                "name" => "Other Steve",
                "email" => "other.stve@pm.com",
                "password" => "amo@coxinha"
            ]
        ];
        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
