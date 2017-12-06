<?php
use yii\widgets\DetailView;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'جزئیات پلن';
?>
<div class="box box-info">
    <div class="box box-header">
        <i class="fa fa-eye"></i>
        <h3 class="box-title">جزئیات پلن</h3>
    </div>
    <div class="box-body">
        <?= DetailView::widget([
           'model'=>$planModel
             ]) ?>    
              <?= Html::a('بازگشت', Url::to(['index']), [
            'class'=>'btn btn-info col-offset-right'
        ]) ?>

    </div>
</div>

