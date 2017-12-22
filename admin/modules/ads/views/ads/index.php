<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ads';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-info">
    <div class="box-header ui-sortable-handle" style="cursor: move;">
        <i class="fa fa-envelope"></i>

        <h3 class="box-title">لیست تبلیغات</h3>
        <!-- tools box -->
        <div class="pull-right box-tools">
            <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
        </div>
        <!-- /. tools -->
    </div>
    <div class="box-body">
        <?= Html::a('Create Ads', ['create'], ['class' => 'btn btn-success']) ?>
        <?php Pjax::begin(); ?>    
        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
            'id',
            'title',
            'image',
            'star',
             'rate',
             'status',
            [
                'attribute' => 'username',
                'value' => function($model){
                    return $model->user->username;
                }
            ],
            // 'tags',
            // 'created_at',
            // 'updated_at',
            // 'user_id',
            // 'type_id',
            
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {view} {delete}',
                'buttons' => [
                    'update' => function ($index, $model, $key){
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', Url::to(['update', 'aid' => $model->id]));
                    },
                    'view' => function ($index, $model, $key){
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', Url::to(['view', 'aid' => $model->id]));
                    },
                     'delete' => function ($index, $model, $key){
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', Url::to(['delete', 'aid' => $model->id]));
                    },
                ]
            ],
        ],
    ]);
    ?>
    <?php Pjax::end(); ?>
    </div>
    <div class="box-footer clearfix">
        
    </div>
</div>

