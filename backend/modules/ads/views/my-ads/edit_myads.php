<?php
$this->title = "ویرایش جدید";
?>
<?= $this->render('_form', [
    'title' => $this->title,
    'model' => $model,
    'categoryItems' => $categoryItems,
]) ?>
