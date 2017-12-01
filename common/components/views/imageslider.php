<?php
$baseUrl = $widget->baseUrl;
?>
<div id="mycarousel" class="carousel slide" data-ride = "carousel">
	<?php if($widget->indicators) : ?>
	<ol class="carousel-indicators">
		<li class="active" data-target="#mycarousel" data-slide-to="0"></li>
		<li data-target="#mycarousel" data-slide-to="1"></li>
		<li data-target="#mycarousel" data-slide-to="2"></li>
	</ol>
	<?php endif; ?>
	<div class="carousel-inner" style="width:<?= isset($widget->width) ? $widget->width.';': '100%'?>;height:<?= isset($widget->height) ? $widget->height.';': '100%' ?>;">
            <?php foreach ($widget->images as $image) : ?>
                    <div class="item <?= isset($image['active']) ? 'active': '';?>">
                            <img src="<?= $baseUrl.'/'.$image['src'] ?>" 
                            width="<?= isset($image['width']) ? $image['width'].';': '100%' ?>"
                            height="<?= isset($image['height']) ? $image['height'].';': '100%' ?>"
                            class="<?= isset($widget->classes) ? $widget->classes: '';?>">
                            <div class="carousel-caption">
                                    <?= isset($image['caption']) ? $image['caption']: '';?>
                            </div>
                    </div>
            <?php endforeach; ?>			
	</div>
	<?php if($widget->nextPerv): ?>
	<a href="#mycarousel" class="left carousel-control" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>

	<a href="#mycarousel" class="right carousel-control" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
	<?php endif; ?>
</div>