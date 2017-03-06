<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'authManager'=>[           //phhan quyen co ban
        	'class'=>'yii\rbac\DBManager'
        ]
    ],
];
