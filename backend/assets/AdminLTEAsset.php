<?php
namespace backend\assets;

use yii\web\AssetBundle;
use Yii;
//use yii\bootstrap\BootstrapPluginAsset;

// set @themes alias so we do not have to update baseUrl every time we change themes
Yii::setAlias('@themes', Yii::$app->view->theme->baseUrl);

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 *
 * @since 2.0
 *
 * Customized by Nenad Živković
 */
class AdminLTEAsset extends AssetBundle
{
    public $basePath = '@app';
    public $baseUrl="@themes";


    public $css = [
        'bootstrap/css/bootstrap.min.css',
        'dist/css/AdminLTE.css',
        'dist/css/skins/_all-skins.min.css',
        'plugins/iCheck/flat/blue.css',
        'plugins/morris/morris.css',
        'plugins/jvectormap/jquery-jvectormap-1.2.2.css',
        'plugins/datepicker/datepicker3.css',
        'plugins/daterangepicker/daterangepicker.css',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        'css/animate.min.css',
        'resource/css/ionicons.min.css',
        'resource/css/font-awesome.min.css',
//        'fonts/font.css',
        'css/style-admin.css',
    ];
    public $js = [
        'js/main.js',
        'plugins/jQuery/jquery-2.2.3.min.js',
        'resource/js/jquery-ui.min.js',
        'resource/js/moment.min.js',
        'resource/js/raphael-min.js',
//        'plugins/morris/morris.min.js',
        'plugins/sparkline/jquery.sparkline.min.js',
        'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'plugins/knob/jquery.knob.js',
        'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'plugins/daterangepicker/daterangepicker.js',
        'plugins/datepicker/bootstrap-datepicker.js',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        'plugins/slimScroll/jquery.slimscroll.min.js',
        'plugins/fastclick/fastclick.js',
        'dist/js/app.min.js',
        'dist/js/pages/dashboard.js',
        'dist/js/demo.js',
        
    ];
    
   public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
//       'yii\bootstrap\BootstrapPluginAsset',
    ];    
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
