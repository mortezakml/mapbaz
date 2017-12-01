<?php
use yii\helpers\Url;
if(!isset($entityModel)){
?>
<div class="row animated bounceInDown">
    <div class="col-lg-12 col-md-12"> 
        <p>هیچ تبلیغی برای شما فعال نیست</p>
        <p>برای فعال سازی و دریافت کد به لینک زیر مراجعه کنید.</p>
        <a href="<?= Url::to(['/ads/code/generate-code', 'aid' => $aid])?>" class="btn btn-sm btn-primary link-pjax">دریافت کد</a>
    </div>
</div>
<?php 
} 
else{
?>

<div class="animated bounceInDown">
    <p><label>وضعیت کد</label> : <?= $entityModel->status ?></p>
    <p>
        <?php
        if($$entityModel->type == 1)
        {
            ?>
            <img src="<?= $entityModel->data ?>">
            <?php
        }
        else {
            ?>
            <p><?= $entityModel->data ?></p>
        <?php
        }
        ?>
    </p>
    <label>کد برای بنرعکس</label>
    <p>
        <textarea rows="5" cols="100" style="direction: ltr;">
        
        </textarea>
    </p>
</div>
<?php } ?>