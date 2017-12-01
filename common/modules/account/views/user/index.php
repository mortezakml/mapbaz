<?php
use yii\grid\GridView;
use app\widgets\BoxHtml;
use yii\helpers\Html;
$this->title = "کاربران";

?>
<?php BoxHtml::begin(); ?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        [
            'attribute' => 'username',
            'format' => 'raw',
            'value' => function($model)
            {   
                return Html::a($model->username.'@', "https://t.me/$model->username", [
                    'target' => '_blank'
                ]);
            }
        ],
        
        'first_name',
        'last_name',
        [
            'attribute' => 'status',
            'format' => 'raw',
            'value' => function($model)
            { 
                return ($model->status) ? '<i class="fa fa-check"></i>':'<i class="fa fa-remove"></i>';
            }
        ],
        'chat_id',
        'type',
        'created_at',
        [
            'class' => \yii\grid\ActionColumn::className(),
            'template' => '{view} {update} {delete} {sendMessage}',
            'buttons' => [
                'sendMessage' => function($index, $model, $key){
                    return Html::a('<i class="fa fa-send"></i>', yii\helpers\Url::to(['send-message', 'cid' => $model->chat_id]));
                }
            ]
        ]
    ]
]); ?>
<?php BoxHtml::end(); ?>
