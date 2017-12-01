<?php
/* @var $this yii\web\View */
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
?>
 <?= Html::a('ایجاد پلان', ['create'], ['class' => 'btn btn-success']) ?>
<?= GridView::widget([
    'dataProvider'=>$dataProvider,
    'columns'=>[
        'id',
        'name',
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
