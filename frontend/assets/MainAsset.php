<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;


use yii\web\AssetBundle;
use Yii;

// set @themes alias so we do not have to update baseUrl every time we change themes
Yii::setAlias('@themes', Yii::$app->view->theme->baseUrl);

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MainAsset extends AssetBundle
{
    public $basePath = '@app';
    public $baseUrl="@web/themes/listing/";
    
    public $css = [
        'css/style.css',
        'css/menu.css',
        'css/color/color.css',
        'assets/testimonial/css/style.css',
        'assets/testimonial/css/elastislide.css',
        'css/responsive.css',
        'assets/revolution_slider/css/revslider.css',//SLIDER REVOLUTION
    ];
    public $js = [
        'js/jquery-1.11.3.min.js',
        'js/jquery.js',
        'js/jquery.easing.min.js',
        'js/modernizr.custom.js',
        'bootstrap/js/bootstrap.min.js',
        'js/menu.js',
        'assets/revolution_slider/js/revolution-slider-tool.js',
        'assets/revolution_slider/js/revolution-slider.js',
        'js/owl.carousel.js',
        'js/triger.js',
        'js/jquery.countTo.js',
        'js/jquery.cycle2.min.js',
        'js/jquery.waypoints.min.js',
        'js/jquery.raty-fa.js',
        'js/rate.js',
        'assets/testimonial/js/jquery.tmpl.min.js',
        'assets/testimonial/js/jquery.elastislide.js',
        'assets/testimonial/js/gallery.js',
        'js/custom.js',//custom
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        '\rmrevin\yii\fontawesome\AssetBundle',
        '\yii\bootstrap\BootstrapPluginAsset',
    ];
    
    public $jsOptions =[
      'position' => \yii\web\View::POS_HEAD
    ];
}
