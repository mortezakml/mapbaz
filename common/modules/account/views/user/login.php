<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\components\ImageSlider;
use yii\captcha\Captcha;
use kartik\social\GooglePlugin;

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
                <?= GooglePlugin::widget([
                    'type'=>GooglePlugin::SIGNIN, 
                    'tag'=>'span', 
                    'signinOptions'=>['id'=>'signinButton'],
                    'settings' => [
                        'callback'=>'signinCallback',
                        'cookiepolicy' => 'single_host_origin',
                    ]
                ]);?>
                <?= Html::submitButton('ورود', ['class' => 'btn btn-block btn-primary', 'name' => 'login-button', 'id' => 'btn-ani']) ?>
            </div>
        </div>
<div class="form-group">
    <div class="col-lg-8 col-lg-offset-2">
        
    </div>
</div>
    <?php ActiveForm::end(); ?>


<?php
$js ="
/**
 * The callback client script
 */
function signinCallback(authResult) {
    console.log(authResult);
    if (authResult['status']['signed_in']) {
        // Update the app to reflect a signed in user
        // Hide the sign-in button now that the user is authorized, for example:
        document.getElementById('signinButton').setAttribute('style', 'display: none');
        
    } else {
        // Update the app to reflect a signed out user
        // Possible error values:
        //   'user_signed_out' - User is signed-out
        //   'access_denied' - User denied access to your app
        //   'immediate_failed' - Could not automatically log in the user
        console.log('Sign-in state: ' + authResult['error']);
    }
}
    ";
$this->registerJs($js, \yii\web\View::POS_END);
?>