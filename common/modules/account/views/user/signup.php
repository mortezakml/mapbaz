<?php
use yii\widgets\ActiveForm;
use yii\helpers\Url;;
use yii\helpers\Html;
use yii\captcha\Captcha;
$this->title = 'عضويت';
$this->registerCssFile('/css/signup.css');
?>
<div class="signup">
    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username',[
                'options' => ['class' => 'form-group has-feedback'],
                'template' => '{label}{input}{error}<span class="glyphicon glyphicon-user form-control-feedback"></span>'
            ])->textInput([
                'class' => ' form-control feedback'
            ]); ?>

            <?= $form->field($model, 'email',[
                'options' => ['class' => 'form-group has-feedback'],
                'template' => '{label}{input}{error}<span class="glyphicon glyphicon-leaf form-control-feedback"></span>'
            ])->textInput([
                'class' => ' form-control feedback'
            ]); ?>

            <?= $form->field($model, 'password_repeat',[
                    'options' => ['class' => 'form-group has-feedback'],
                    'template' => '{label}{input}{error}<span class="glyphicon glyphicon-star form-control-feedback"></span>'
                    ])->passwordInput([
                            'class' => ' form-control feedback'
            ]); ?>

            <?= $form->field($model, 'password',[
                    'options' => ['class' => 'form-group has-feedback'],
                    'template' => '{label}{input}{error}<span class="glyphicon glyphicon-star form-control-feedback"></span>'
                    ])->passwordInput([
                            'class' => ' form-control feedback'
            ]); ?>

            <?php
//            $form->field($model, 'verifyCode')->widget(Captcha::className(), [
//                'captchaAction' => Url::to(['account/user/captcha']),
//                'captchaAction' => 'default/captcha',
//                'template' => '<div class="row"><div class="col-lg-3 col-md-3 col-sm-3">{image}</div><div class="col-lg-6 col-md-6 col-sm-6">{input}</div></div>',               
//              ])->label("كد تصوير را وارد كنيد") ?>

             <?= Html::submitInput('عضويت', ['class' => 'btn btn-primary']); ?>

    <?php ActiveForm::end(); ?>
</div>
