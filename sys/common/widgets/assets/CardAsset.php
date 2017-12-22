<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace common\widgets\assets;

/**
 * Description of CardAsset
 *
 * @author asus
 */
class CardAsset extends \yii\web\AssetBundle{
    public $sourcePath = '@common/widgets/bower/card';

    public $css = [
        'css/style.css'
    ];
    public $js = [
        'js/index.js',
    ];
}
