<?php
namespace app\components\assets;
/**
* @author <akbar.joody@gmail.com>
*/
class CustomGridViewAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@app/components/bower/customgridview';
	public $css = [
		'colResizeable/css/main.css'
	];
	public $js = [
            'colResizeable/js/colResizable-1.5.min.js',
	];


	public $depends = [
            'yii\web\JqueryAsset'
    	];  

}