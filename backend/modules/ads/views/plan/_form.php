<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin() ?>
    <?= $form->field($planModel,'name') ?>
    <?= $form->field($planModel,'description') ?>
    <?= $form->field($planModel,'days') ?>
    <?= $form->field($planModel,'status') ?>
   <?= Html::submitButton($planModel->isNewRecord ? 'ایجاد' : 'ویرایش', 
           ['class' => $planModel->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
<?php ActiveForm::end() ?>