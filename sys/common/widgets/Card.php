<?php
namespace common\widgets;

/**
 * Description of Card
 *
 * @author asus
 */
class Card extends \yii\base\Widget{
    public $ads;
    
    public $buttons = [];



    public function init() {
        assets\CardAsset::register($this->view);
    }
    public function run() {
        
        return $this->render('card', [
            'widget' => $this
        ]);
    }
    
    
    
    public function generateButtons()
    {
        foreach ($this->buttons as $button)
        {
            if($button instanceof \Closure)
            {
                echo '&nbsp;'. call_user_func($button, $this);
            }
        }
    }
}
