<?php
$this->title = "تبلیغ های من";
use common\widgets\Card;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
?>

<div class="row">
    <div class="col-lg-8 col-md-8 col-lg-offset-4 col-md-offset-4">
         <?php if(empty($adsModel)){ ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-angle-left"></i> عدم وجود تبلیغ
            </div>
            <div class="panel-body">
                <div class="raw">
                <div class="col-md-4 col-md-offset-4">
                <div style="padding: 40px 20px 0px 0px;color: blueviolet;font-family: tahoma;background: url('themes/adminlte/img/alert-ads.png');background-size: cover; height: 200px; opacity: 1; width:200px;border-radius: 5px;" class="animated bounceInDown">
                    تبلیغی وجود ندارد
                </div>
                </div>
                <div class="col-md-4">
                    <div style="background:#eee;padding: 10px;border-radius: 5px;height: 200px;border: 1px solid #6f25b4;" class="animated bounceInDown">
                <p>شما در حال حاضر هیچ تبلیغی نداردید</p>
                برای در ج تبلیغ شروع کنید
                <?= Html::a('<i class="fa fa-plus"></i> ثبت تبلیغ جدید', Url::to(['new-ads']), [
                    'class' => 'btn btn-sm btn-success',
                    'onclick' => "showModal(this); return false;",
                    'style' => 'margin:50px;'
                ]); ?>
                </div>
                </div>
                </div>
                
            </div>
        </div>
        <?php } ?>
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

