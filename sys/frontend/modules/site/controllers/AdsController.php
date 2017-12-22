<?php
namespace frontend\modules\site\controllers;

use backend\modules\ads\models\Ads;
use yii\filters\AccessControl;
/**
 * Description of AdsController
 *
 * @author asus
 */
class AdsController extends \yii\web\Controller{
    

    
    public function actionAdsDetail($aid)
    {
        $adsModel = Ads::findOne($aid);
        if(!isset($adsModel->id))
        {
            throw new \yii\web\HttpException(403, "ads not Found!!");
        }
        
        return $this->render('ads_detail', [
            'adsModel' => $adsModel,
        ]);
    }
}
