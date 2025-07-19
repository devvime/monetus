<?php

namespace Pipu\Database;

use Medoo\Medoo;

class Database
{
    private $db;

    public function __construct()
    {
        $this->db = new Medoo([
            'database_type' => DATABASE_TYPE,
            'database_name' => DATABASE_NAME,
            'server' => DATABASE_SERVER,
            'username' => DATABASE_USER,
            'password' => DATABASE_PASSWORD
        ]);
    }

    public function connect()
    {
        return $this->db;
    }
}
