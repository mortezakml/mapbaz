<?php
/* @var $this yii\web\View */
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;


$this->title='لیست پلان ها';
?>
<div class="box box-primary">
        <div class="box box-header">
            <i class="fa fa-list"></i>
            <h3 class="box-title">لیست پلان ها</h3>
        </div>
    <div class=" box-body">
            <?= Html::a('ایجاد پلان', ['create'], ['class' => 'btn btn-success']) ?>
           <?= GridView::widget([
               'dataProvider'=>$dataProvider,
               'columns'=>[
                   'id',
                   'name',
                   'description',
                   'days',
                   'status',
                   [
                       'class'=> \yii\grid\ActionColumn::className(),
                       'template'=>'{update} {view} {delete}',
                       'buttons'=>[
                           'update'=> function ($index, $model, $key){
                               return Html::a('<span class="glyphicon glyphicon-pencil"></span>', Url::to(['update','cid'=>$model->id]));
                           },
                           'view'=> function ($index, $model, $key){
                               return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', Url::to(['view','cid'=>$model->id]));
                           },
                           'delete'=> function ($index, $model, $key){
                               return Html::a('<span class="glyphicon glyphicon-trash"></span>', Url::to(['delete','cid'=>$model->id]));
                           },
                       ]
                   ]
               ]
        ]);?>
    </div>
</div>