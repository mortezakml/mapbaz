<?php
namespace common\actions;

use Yii;
/**
 * Description of generalAction
 *
 * @author asus
 */
class adsImageAction extends \yii\base\Action{
    
    public function runWithParams($params) {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON; 
        $image_name = isset($params['img']) ? $params['img']: 'default.jpg';
        return Yii::$app->utility->readAdsImage($image_name);;
    }
    
}
