<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

?>



        <?php $form = ActiveForm::begin() ?>
        <?= $form->field($planModel, 'name') ?>
        <?= $form->field($planModel, 'description') ?>
        <?= $form->field($planModel, 'days') ?>
        <?= $form->field($planModel, 'status') ?>
        <?= Html::submitButton($planModel->isNewRecord ? 'ایجاد' : 'ویرایش',
                ['class' => $planModel->isNewRecord ? 'btn btn-success' : 'btn btn-primary'])?>
        <?= Html::a('بازگشت', Url::to(['index']), [
            'class'=>'btn btn-info col-offset-right'
        ]) ?>

<?php ActiveForm::end() ?>
