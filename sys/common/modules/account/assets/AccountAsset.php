<?php
namespace common\modules\account\assets;

use Yii;
/**
*
* @author <akbar.joody@gmail.com>
*/
class AccountAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@common/modules/account/bower';

	public $js = [
		'js/user.js'
	];

	public $css = [
		'css/account.css',
	];

	public $depends =  [
		'yii\web\JqueryAsset',
		'yii\bootstrap\BootstrapAsset',
	];
}