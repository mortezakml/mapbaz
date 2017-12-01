<?php
use yii\grid\GridView;
?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'created_at',
        'link_request',
    ]
]); ?>
