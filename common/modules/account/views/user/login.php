<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\components\ImageSlider;
use yii\captcha\Captcha;

$this->title = 'ورود';
$this->params['breadcrumbs'][] = $this->title;
?>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "<div class=\"col-md-12\">{label}</div>\n<div class=\"col-lg-8 col-md-8 col-sm-offset-2 col-sm-8\">{input}</div>\n<div class=\"col-lg-8 col-md-8 col-lg-offset-1 col-md-offset-1\">{error}</div>",
        ],
    ]); ?>
        <?= $form->field($model, 'username')->textInput(['placeholder' => 'نام کاربری'])->label('') ?>

        <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'گذر واژه'])->label('') ?>


        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-8">
                <?= Html::submitButton('ورود', ['class' => 'btn btn-block btn-primary', 'name' => 'login-button', 'id' => 'btn-ani']) ?>
            </div>
        </div>
    <?php ActiveForm::end(); ?>
