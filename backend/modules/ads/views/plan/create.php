<?php
$this->title = 'ایجاد پلن';
?>
<div class="box box-danger">
    <div class=" box box-header">
        <i class="fa fa-credit-card"></i>
        <h3 class="box-title">ایجاد پلن جدید</h3>
    </div>

    <div class="box-body">
        <?php
echo $this->render('_form', [
    'planModel'=>$planModel
]);
?>
    </div>
</div>
