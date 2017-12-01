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
    
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['ads-detail'],
                'rules' => [
                    [
                        'actions' => ['ads-detail'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    
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
