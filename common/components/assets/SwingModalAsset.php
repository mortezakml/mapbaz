<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\components\assets;

/**
 * Description of CardAsset
 *
 * @author asus
 */
class SwingModalAsset extends \yii\web\AssetBundle{
    public $sourcePath = '@app/components/bower/swingmodal';

    public $css = [
        'css/style.css'
    ];
    public $js = [
        'js/swing.js',
    ];
}
