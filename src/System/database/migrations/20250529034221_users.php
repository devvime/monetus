<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Users extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('users');
        $table
            ->addColumn('name', 'string')
            ->addColumn('email', 'string')
            ->addIndex('email', ['unique' => true])
            ->addColumn('password', 'string')
            ->addColumn('super_user', 'integer', ['default' => 0])
            ->addColumn('avatar', 'string')
            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->create();
    }
}
