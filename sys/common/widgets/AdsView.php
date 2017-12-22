<?php

namespace common\widgets;


use Yii;
use backend\modules\ads\models\Ads;
/**
 * Description of AdsView
 *
 * @author asus
 */
class AdsView extends \yii\base\Widget {

    public $pageSize = 8;
    
    public $pjax = false;

    public function init() {
        
    }

    public function run() {

      
        return $this->render('ads_view', [
                    'widget' => $this,
        ]);
    }
    
    
    public function getPjax()
    {
        if(isset($this->pjax)){
            return new \yii\widgets\Pjax();
        }
        else{
            return null;
        }
    }

}
