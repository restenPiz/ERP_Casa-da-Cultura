<?php

return [
    'use_morph_map' => false,

    'checkers' => [


        'user' => 'default',

        'role' => 'default',
    ],

    'cache' => [
        'enabled' => env('LARATRUST_ENABLE_CACHE', env('APP_ENV') === 'production'),

        'expiration_time' => 3600,
    ],

    'user_models' => [
        'users' => \App\Models\User::class,
    ],

    'models' => [

        'role' => \App\Models\Role::class,

        'permission' => \App\Models\Permission::class,

        'team' => \App\Models\Team::class,
    ],

    'tables' => [

        'roles' => 'roles',

        'permissions' => 'permissions',

        'teams' => 'teams',

        'role_user' => 'role_user',

        'permission_user' => 'permission_user',

        'permission_role' => 'permission_role',
    ],

    'foreign_keys' => [
        'user' => 'user_id',

        'role' => 'role_id',

        'permission' => 'permission_id',

        'team' => 'team_id',
    ],

    'middleware' => [
        'register' => true,

        'handling' => 'abort',

        'handlers' => [
            'abort' => [
                'code' => 403,
                'message' => 'User does not have any of the necessary access rights.',
            ],

            'redirect' => [
                'url' => '/home',
                'message' => [
                    'key' => 'error',
                    'content' => '',
                ],
            ],
        ],
    ],

    'teams' => [
        'enabled' => false,

        'strict_check' => false,
    ],

    'permissions_as_gates' => false,

    'panel' => [
        'register' => false,

        'domain' => env('LARATRUST_PANEL_DOMAIN'),

        'path' => 'laratrust',

        'go_back_route' => '/',

        'middleware' => ['web'],

        'assign_permissions_to_user' => true,

        'create_permissions' => true,


        'roles_restrictions' => [
            // The user won't be able to remove roles already assigned to users.
            'not_removable' => [],

            // The user won't be able to edit the role and the permissions assigned.
            'not_editable' => [],

            // The user won't be able to delete the role.
            'not_deletable' => [],
        ],
    ],
];
