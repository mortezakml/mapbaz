<?php
$this->title = "تبلیغ های من";
use common\widgets\Card;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
?>

<div class="row">
    
         <?php if(empty($adsModel)){ ?>
        <div class="col-lg-8 col-md-8 col-lg-offset-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-angle-left"></i> عدم وجود تبلیغ
            </div>
            <div class="panel-body">
                <div class="col-lg-6 col-md-6">
                    <p><i class="fa fa-star"></i> کاربر گرامی شما در حال حاضر هیچ تبلیغی ندارید</p>
                    <p><i class="fa fa-angle-left"></i> شما در نسخه فعلی مپ باز فقط می توانید سه تبلیغ درج کنید</p>
                    <p><i class="fa fa-image"></i>&nbsp;
                        تبلیغ های شما در مپ باز به سه نوع دسته بندی می شوند
                        <ul >
                            <li>تبلیغ سایتی</li>
                            <li>تبلیغ محصولی</li>
                            <li>تبلیغ تلگرامی</li>
                        </ul>
                    </p>
                    <p>برای درج تبلیغ شروع کنید</p>
                    <?= Html::a('<i class="fa fa-plus"></i> ثبت تبلیغ جدید', Url::to(['new-ads']), [
                         'class' => 'btn btn-sm btn-success btn-block',
                         'onclick' => "showModal(this); return false;",
                     ]); ?>
                </div>
                <div class="col-lg-6 col-md-6">
                <div style="background: url('themes/adminlte/img/alert-ads.png');background-size: cover;color:#fff;background-position: bottom;padding: 10px;border-radius: 5px;height: 200px;border: 1px solid #6f25b4;" class="pull-right animated bounceInDown">

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
        <?php 
        }
        else {?>
            <div class="col-lg-8 col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        آمار و اطلاعات
                    </div>
                    <div class="panel-body animated bounceInUp">
                        <img src="themes/adminlte/img/info.jpg" class="pull-left" style="max-width: 38%; opacity: 0.5">
                        
                       
                        
                       <p><i class="fa fa-star" style="color:#6f25b4 "></i> تعداد تبلیغ های ثبت شده: <?= $adsCount; ?></p>
                        <p><i class="fa fa-star" style="color:#0000ff "></i> پربازدید ترین تبلیغ شما: <a href="#">حباب افروز</a></p>
 
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        تبلیغ جدید
                    </div>
                    <div class="panel-body">
                         <div style="margin-left: 10px;background: url('themes/adminlte/img/alert-ads.png');background-size: cover;background-position: bottom;padding: 10px;border-radius: 5px;height: 200px;border: 1px solid #6f25b4;" class="pull-right animated bounceInDown">

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

            <div class="col-lg-12 col-md-12">
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
        </div>
        <?php } ?>
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

