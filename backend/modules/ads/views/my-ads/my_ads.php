<?php
$this->title = "تبلیغ های من";
use common\widgets\Card;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
?>
<?= Html::a('<i></i> ثبت تبلیغ جدید', Url::to(['new-ads']), [
    'class' => 'btn btn-sm btn-success',
    'onclick' => "showModal(this); return false;",
]); ?>
<div class="row">
<?php foreach ($adsModel as $ads):?>
    <div class="col-lg-4 col-md-3">
    <?php  ?>
    <?= Card::widget([
        'ads' => $ads,
        'buttons' => [
            'update' => function($widget)use($ads){
                return Html::a('<i class="fa fa-edit"></i>', Url::to(['edit-ads', 'aid' => $ads->id]), [
                    'onclick' => "showModal(this); return false;",
                ]);
            },
            'view' => function($widget)use($ads){
                return Html::a('<i class="fa fa-eye"></i>', Url::to(['view-myads', 'aid' => $ads->id]));
            }
        ]
    ]); ?>
    </div>
<?php endforeach; ?>
    
</div>
<?php 
Modal::begin(['id' => 'my-ads-modal']);
Pjax::begin(['id' => 'ads-pjax']);
    $js ="
    function showModal(obj)
    {
        var url = $(obj).attr('href');
        $.ajax({
            url:url
        })
        .done(function(data){
            $('#ads-pjax').html(data);
            $('#my-ads-modal').modal('show');
        });

        return false;
    }
        ";
    $this->registerJs($js, \yii\web\View::POS_END);
Pjax::end();    
Modal::end();
?>

