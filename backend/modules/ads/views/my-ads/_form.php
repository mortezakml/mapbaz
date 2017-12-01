<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model app\modules\ads\models\Ads */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="box box-info">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
                <i class="fa fa-arrow-left"></i>

                <h3 class="box-title"><?= $title ?></h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <div class="box-body">  

                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'file', [
                    'options' => [
                        'style' => 'direction:ltr;'
                    ]
                ])->widget(FileInput::className()); ?>


                <?= $form->field($model, 'tags')->textInput(['maxlength' => true]) ?>

                
            </div>
            <div class="box-footer clearfix">
                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'ایجاد' : 'ویرایش', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>
            </div>
        </div>
    </div>
</div>
 <?php ActiveForm::end(); ?>   


