<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'db' => [
        'class' => '\yii\db\Connection',
        'dsn' => 'mysql:host=SQL5.FREEMYSQLHOSTING.NET;dbname=sql9162918',
        'username' => 'sql9162918',
        'password' => 'mC9WPAgU67',
        'charset' => 'utf8',
    ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'authManager'=>[           //phhan quyen co ban
        	'class'=>'yii\rbac\DBManager'
        ]
    ],
];
