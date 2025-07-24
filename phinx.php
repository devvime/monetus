<?php

require __DIR__ . '/src/System/config/config.php';

return
    [
        'paths' => [
            'migrations' => '%%PHINX_CONFIG_DIR%%/src/System/database/migrations',
            'seeds' => '%%PHINX_CONFIG_DIR%%/src/System/database/seeds'
        ],
        'environments' => [
            'default_migration_table' => 'phinxlog',
            'default_environment' => 'development',
            'production' => [
                'adapter' => DATABASE_TYPE,
                'host' => DATABASE_SERVER,
                'name' => DATABASE_NAME,
                'user' => DATABASE_USER,
                'pass' => DATABASE_PASSWORD,
                'port' => DATABASE_PORT,
                'charset' => 'utf8',
            ],
            'development' => [
                'adapter' => DATABASE_TYPE,
                'host' => DATABASE_SERVER,
                'name' => DATABASE_NAME,
                'user' => DATABASE_USER,
                'pass' => DATABASE_PASSWORD,
                'port' => DATABASE_PORT,
                'charset' => 'utf8',
            ],
            'testing' => [
                'adapter' => DATABASE_TYPE,
                'host' => DATABASE_SERVER,
                'name' => DATABASE_NAME,
                'user' => DATABASE_USER,
                'pass' => DATABASE_PASSWORD,
                'port' => DATABASE_PORT,
                'charset' => 'utf8',
            ]
        ],
        'version_order' => 'creation'
    ];
