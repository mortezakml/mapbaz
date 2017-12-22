<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\ads\models\Ads */

$this->title = 'Update Ads: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Ads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ads-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'typeItems' => $typeItems,
    ]) ?>

</div>
