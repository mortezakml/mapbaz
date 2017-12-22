<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\file\FileInput;
?>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($sendMessageFormModel, 'chat_id')->hiddenInput()->label('') ?>
    <?= $form->field($sendMessageFormModel, 'caption')->textarea() ?>
    <?= $form->field($sendMessageFormModel, 'type')->dropDownList($sendMessageFormModel->typeItems); ?>
    <?= $form->field($sendMessageFormModel, 'file')->widget(FileInput::className()); ?>
    <?= Html::submitInput('ارسال', [
        'class' => 'btn btn-success',
    ]) ?>
<?php ActiveForm::end(); ?>

 