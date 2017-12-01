<?php
namespace backend\modules\ads\controllers;

use Yii;
use backend\modules\ads\models\Inout;
use backend\modules\ads\models\InoutInfoSearch;
use backend\modules\ads\models\Ads;
/**
 * Description of InoutController
 *
 * @author asus
 */
class InoutController extends \yii\web\Controller{
    
    /**
     * 
     * @param type $aid ads_id
     */
    public function actionMyInout($aid) 
    {
        
        $inoutSearchModel = new InoutInfoSearch();
        $dataProvider = $inoutSearchModel->search(Yii::$app->request->queryParams, $aid);
        return $this->renderAjax('my_inout_info',[
            'dataProvider' => $dataProvider
        ]);
    }
}
