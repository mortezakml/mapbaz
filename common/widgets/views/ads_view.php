<?php
use backend\modules\ads\models\Ads;
use yii\widgets\LinkPager;
use yii\widgets\Pjax;

$adsQuery = Ads::find();

$pagination = new \yii\data\Pagination([
    'defaultPageSize' => $widget->pageSize,
    'totalCount' => $adsQuery->count(),
    ]);

$data = $adsQuery->limit($pagination->limit)
        ->offset($pagination->offset)
        ->all();
?>
<?php
if($widget->pjax){
Pjax::begin(['id' => 'a','timeout' => false, 'enablePushState' => false]);
}
?>
<div class="listing-wrapper row">
<?php foreach ($data as $ads){ ?>
    <?php
    if (!$ads instanceof \yii\db\ActiveRecord) {
        throw new \yii\web\HttpException(403, 'models is not set');
    }
    $img = Yii::$app->urlManager->createAbsoluteUrl(['site/site/ads-image', 'img' => $ads->image]);
    ?>

    <div class="item col-md-3 col-sm-6 col-xs-12"><!-- .ITEM -->
        <div class="listing-item clearfix">
            <div class="figure">
                <img src="<?= $img ?>" alt="listing item"/>
                <div class="listing-overlay">
                    <div class="listing-overlay-inner rgba-bgyallow-1">
                        <div class="overlay-content">
                            <ul class="listing-links">
                                <li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>
                                <li><a class="bgwhite nohover" href="<?= Yii::$app->urlManager->createAbsoluteUrl(['site/ads/ads-detail', 'aid' => $ads->id]) ?>"><i class="fa fa-shopping-cart blue-1"></i></a></li>
                                <li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listing-content clearfix">
                <div class="listing-meta-cat">
                    <a class="bgyallow-1" href="#"><i class="fa fa-suitcase white"></i></a>
                </div>
                <div class="listing-title">
                    <h6><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['site/ads/ads-detail', 'aid' => $ads->id]) ?>"><?= $ads->title; ?></a></h6>
                </div>
                <div class="listing-disc">
                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.Morbi accumsan ipsum velit. Nam nec tellus a odio sit tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent permis conubia.</p>
                </div>
                <div class="listing-location pull-left"><!-- location-->
                    <a href="#"><i class="fa fa-map-marker"></i> Turkey</a>
                    <a href="#"><i class="fa fa-map-marker"></i> 163 William Street #2 / New York, NY 10038</a>
                </div><!-- location end-->
                <div class="star-rating pull-right"><!-- rating-->
                    <div class="score-callback" data-score="5"></div>
                </div><!-- rating end-->
            </div>
        </div>
        <div class="listing-border-bottom bgyallow-1"></div>
    </div><!-- /.ITEM -->
<?php } ?>
</div>
    
<div class="row">
    <div class="col-lg-12 col-md-12">
        <?= LinkPager::widget([
            'pagination' => $pagination
        ])
        ?>
    </div>
</div>
<?php 
if($widget->pjax){
    Pjax::end();
}
?>
    