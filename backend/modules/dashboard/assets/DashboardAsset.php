<?php
namespace backend\modules\dashboard\assets;
/**
* @author Akbar Joudi <akbar.joody@gmail.com>
*/

class DashboardAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@backend/modules/dashboard/bower';

    public $js = [
        'js/dashboard.js'
    ];

    public $depends = [
    	'yii\web\JqueryAsset',
    ];
}
