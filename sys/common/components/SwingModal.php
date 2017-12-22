<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\components;

/**
 * Description of SwingModal
 *
 * @author asus
 */
class SwingModal extends \yii\base\Widget{
    
    public $title;
    
    public function init() {
        assets\SwingModalAsset::register($this->view);
    }

    
    
    
    public static function begin($config = array()) {
        $widget = parent::begin($config);
        
        echo $widget->showBoxBegin();
    }
    
    
    public function run() {
//        parent::run();
        $this->showBoxEnd();
    }
    
    
    private function showBoxBegin() {
        $box_html = '<div class="circle"></div>
            <div class="swing-modal">
                <div class="swing-modal-container">
                    <div class="title">
                        '.$this->title.'
                        <i class="fa fa-times close"></i>
                    </div>
                    <div class="copy">
                    ';
        echo $box_html;
    }
    
    private function showBoxEnd() {
        echo '</div>
                    <div class="btn close">
                        Continue
                    </div>
                </div>
            </div>';
    }

}
