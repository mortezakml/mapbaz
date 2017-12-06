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
