<?php
use yii\widgets\Pjax;
$this->title = "نمایش جزییات تبلیغ";
?>
<div class="row">
    <div class="col-lg-8 col-md-8">
        <div class="box box-info">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
                <i class="fa fa-arrow-left"></i>

                <h3 class="box-title">جزییات</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <div class="box-body" style="height: 590px;">
                <?php Pjax::begin(['id' => 'detail-pjax', 'linkSelector' => '.link-pjax', 'enablePushState' => false, 'timeout' => false]); ?>
                
                <?php Pjax::end(); ?>
            </div>
            <div class="box-footer clearfix">
               
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4">
        <div class="box box-info">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
                <i class="fa fa-arrow-left"></i>

                <h3 class="box-title"><?= $adsModel->title ?></h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <div class="box-body">
                <p><label>عنوان : </label> <?= $adsModel->title ?></p>
                <p><img src="<?= Yii::$app->utility->getImageDirectoryUser($adsModel->image) ?>" class="img-responsive" alt="<?= $adsModel->title ?>"></p>
                <div style="background: #72b572; padding: 5px;border: 1px solid green;">
                    <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['ads/code/view-entity-code', 'aid' => $adsModel->id]); ?>" style="color:#fff;" class="link-pjax"><i class="fa fa-code"></i> دریافت کد</a>
                </div>
                <p><label>توضیحات : </label> <?= $adsModel->description ?></p>
                <p>
                    <label>دسته بندی  : </label>
                    <?php foreach($adsModel->adsCategories as $adscategory): ?>
                        <?= $adscategory->category->name; ?> ,
                    <?php endforeach; ?>
                </p>
                <p>
                    <label>نوع پلن  : </label>
                    <?php foreach($adsModel->adsPlans as $adsplan): ?>
                    <a href="#"><?= $adsplan->plan->name; ?></a> ,
                    <?php endforeach; ?>
                </p>
                <p>
                    <label>وضعیت: </label>
                    <i class="fa <?= ($adsModel->status) ? 'fa-check':'fa-remove' ?>"></i>
                </p>
                <p>
                    <label>رتبه دربین تبلیغات: </label>
                    <?= $adsModel->rate ?>
                </p>
                <?php 
                foreach($adsModel->adsPlans as $adsplan){
                    if($adsplan->plan->isWinWin){
                ?>
                    <p>
                        <label>این تبلیغ در چه سایت هایی دیده شده </label>
                        <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['ads/inout/my-inout', 'aid' => $adsModel->id]); ?>" class="link-pjax">نمایش</a>
                    </p>
                <?php 
                    }
                } ?>
            </div>
            <div class="box-footer clearfix">
               <?= \yii\helpers\Html::a('برگشت <i class="fa fa-chevron-left" aria-hidden="true"></i>', yii\helpers\Url::to(['index']), [
                   'class' => 'btn btn-sm btn-warning'
               ]); ?>
            </div>
        </div>
    </div>
</div>



