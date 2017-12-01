<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin() ?>
    <?= $form->field($categoryModel,'name') ?>
    <?= Html::submitButton('ویرایش', [
        'class'=>'btn btn-sm btn-primary'
    ]); ?>
<?php ActiveForm::end() ?>