<?php
return [
    'modules' => [
        '\Cept\Blog' => [
            'className' => 'Cept\Blog\Module',
            'path'      => '../vendor/Cept/Blog/Module.php',
        ],
        '\Cept\User' => [
            'className' => 'Cept\User\Module',
            'path'      => '../vendor/Cept/User/Module.php',
        ],
    ],
    'defaultRoute' => [
        'module' => '\Cept\Blog',
        'controller' => 'PostController',
        'action' => 'index'
    ],
    'db' => [
        '\Phalcon\Db\Adapter\Pdo\Postgresql' => [
            "host" => "localhost",
            "username" => "root",
            "password" => "secret",
            "dbname" => "blog"
        ]
    ]
];