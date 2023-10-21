<?php

return [

    'default' => env('DB_CONNECTION', 'mysql'),

    'connections' => [

        'mysql' => [
            'read' => [
                'host' => env('DB_READ_HOST', '192.168.1.1'),
            ],
            'write' => [
                'host' => env('DB_WRITE_HOST', '196.168.1.1'),
            ],
            'driver' => 'mysql',
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],
    ],

];