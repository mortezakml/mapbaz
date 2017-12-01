<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use backend\assets\LoginAsset;
use yii\helpers\Url;
LoginAsset::register($this);
/**
 * @var $this \yii\base\View
 * @var $content string
 */
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo Html::encode($this->title); ?></title> 
        <?php $this->head(); ?>
    </head>
    <body>
<?php $this->beginBody() ?>
<div class="wrapper">
    <div class="container">
        <h1>خوش آمدید</h1>
        <?= $content ?>
    </div>
    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<?php $this->endBody() ?>
    </body>

</html>
<?php $this->endPage(); ?>