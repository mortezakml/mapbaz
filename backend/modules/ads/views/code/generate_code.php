<?php 
use yii\widgets\ActiveForm;

?>
<div class="row animated bounceInDown">
    <div class="col-lg-12 col-md-12">
        

<?php $form = ActiveForm::begin(); ?>
    <?php if($entityForm->showCodeBox): ?>
        <?= $form->field($entityForm, 'code')->textarea(['row' => 6, 'cols' => 100]); ?>
    <?php endif; ?>
    <?= $form->field($entityForm, 'type')->dropDownList($typeItems, [
        'prompt' => '-- انتخاب آیتم --'
    ]); ?>
    
    <?= $form->field($entityForm, 'status'); ?>

    <?= $form->field($entityForm, 'data')->fileInput(); ?>
<?php ActiveForm::end(); ?>
    </div>
</div>