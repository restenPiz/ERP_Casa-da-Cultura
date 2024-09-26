<?php

return [
    'create_users' => false,

    'truncate_tables' => true,

    'roles_structure' => [
        'admin' => [
            'users' => 'c,r,u,d',
            'courses' => 'c,r,u,d',
            'employees' => 'c,r,u,d',
            'artist' => 'c,r,u,d',
            'trainer' => 'c,r,u,d',
        ],
        'employee' => [
            'users' => 'c,r,u,d',
            'artist' => 'c,r,u,d',
        ],
        'trainer' => [
            'users' => 'c,r,u,d',
            'courses' => 'c,r,u,d',
        ],
        'users' => [
            'courses' => 'r',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];
