<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'modules' => [
        'account' => [
            'class' => 'common\modules\account\Module',
        ],
        'social' => [
            // the module class
            'class' => 'kartik\social\Module',


            // the global settings for the google plugins widget
            'google' => [
                'clientId' => '57891274003-jte1dmvarfuk8griju3biqg20hq6eb09.apps.googleusercontent.com',
            ],


        ],
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'user' => [
        	'class' => 'yii\web\User',
            'loginUrl' => ['account/user/login'],
            'identityClass' => 'common\modules\account\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'utility' => [
            'class' => 'common\components\Utility'
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
