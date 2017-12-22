<?php

namespace frontend\modules\site;

/**
 * site module definition class
 */
class Module extends \yii\base\Module
{
    public $defaultRoute = 'site';
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'frontend\modules\site\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
