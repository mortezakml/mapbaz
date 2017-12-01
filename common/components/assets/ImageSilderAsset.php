<?php
namespace app\components\assets;
/**
* @author <akbar.joody@gmail.com>
*/
class ImageSilderAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@app/components/bower/imageslider';

	public $js = [
		'js/bootstrap.min.js',
	];
	public $depends = [
		'yii\web\JqueryAsset',
		'yii\bootstrap\BootstrapAsset'
	];
}