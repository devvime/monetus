<?php

require __DIR__ . '/src/Config/config.php';

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/src/Database/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/src/Database/seeds'
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
            'port' => '3306',
            'charset' => 'utf8',
        ],
        'development' => [
            'adapter' => DATABASE_TYPE,
            'host' => DATABASE_SERVER,
            'name' => DATABASE_NAME,
            'user' => DATABASE_USER,
            'pass' => DATABASE_PASSWORD,
            'port' => '3306',
            'charset' => 'utf8',
        ],
        'testing' => [
            'adapter' => DATABASE_TYPE,
            'host' => DATABASE_SERVER,
            'name' => DATABASE_NAME,
            'user' => DATABASE_USER,
            'pass' => DATABASE_PASSWORD,
            'port' => '3306',
            'charset' => 'utf8',
        ]
    ],
    'version_order' => 'creation'
];
