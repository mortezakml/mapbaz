<?php
$this->title = 'ویرایش پلن';
?>
<div class="box box-danger">
    <div class=" box box-header">
        <i class="fa fa-pencil"></i>
        <h3 class="box-title">ویرایش پلن</h3>
    </div>

    <div class="box-body">
        <?php
        echo $this->render('_form', [
            'planModel' => $planModel
        ]);
        ?>
    </div>
</div>