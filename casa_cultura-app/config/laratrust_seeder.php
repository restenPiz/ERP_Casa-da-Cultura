<?php

return [
    'create_users' => false,

    'truncate_tables' => true,

    'roles_structure' => [
        'admin' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u',
        ],
        'artist' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u',
        ],
        'employee' => [
            'profile' => 'r,u',
        ],
        'trainer' => [
            'module_1_name' => 'c,r,u,d',
        ],
        'users' => [
            'profile' => 'r,u',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];
