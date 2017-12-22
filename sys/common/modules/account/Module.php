<?php

namespace common\modules\account;

use Yii;


class Module extends yii\base\Module
{
    public $controllerNamespace = 'common\modules\account\controllers';

    public $defaultRoute = 'user';

    public function init()
    {
        parent::init();

        // custom initialization code goes here

    }
}
