<?php
use yii\helpers\Html;
use yii\helpers\Url;
$date = Yii::$app->utility->convertDate(['to' => 'persian', 'time' => $widget->ads->created_at]);
?>
<div class="column">
    <div class="demo-title"></div>
    <!-- Post-->
    <div class="post-module">
      <!-- Thumbnail-->
      <div class="thumbnail">
        <div class="date">
          <div class="day"><?= $widget->ads->star ?></div>
          <div class="month"></div>
        </div><img src="<?= Yii::$app->utility->getImageUrl($widget->ads->image); ?>">
      </div>
      <!-- Post Content-->
      <div class="post-content">
        <div class="category"><?= $date['year'].'/'.$date['month_num'].'/'.$date['day'] ?></div>
        <h1 class="title"><?= $widget->ads->title ?></h1>
        <h2 class="sub_title"><?= $widget->ads->title ?></h2>
        <p class="description" style="display: none; height: 98px; opacity: 1;">
            <?= $widget->ads->description ?>
        <div ><?= $widget->generateButtons(); ?></div>
        </p>
        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#"> 39 comments</a></span></div>
      </div>
    </div>
  </div>