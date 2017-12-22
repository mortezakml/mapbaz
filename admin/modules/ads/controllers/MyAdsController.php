<?php
namespace backend\modules\ads\controllers;


use Yii;
use backend\modules\ads\models\Ads;
use backend\modules\ads\models\Type;
use backend\modules\ads\models\Plan;
use yii\helpers\ArrayHelper;
use backend\modules\ads\models\Category;
/**
 * Description of MyAdsController
 *
 * @author asus
 */
class MyAdsController extends \yii\web\Controller{
    
    public $layout = '//admin';
    
    public $defaultAction = 'index';
    
    public function actionIndex()
    {
        $adsModel = Ads::find()->myAds()->all();
        $adsCount = Ads::find()->myAds()->count();
        return $this->render('my_ads', [
            'adsModel' => $adsModel,
            'adsCount' => $adsCount,
        ]);
    }
    
    
    public function actionViewMyAds($aid)
    {
        $adsModel = Ads::find()->myAds()->andWhere(['id' => $aid])->one();
        return $this->render('view_myads', [
            'adsModel' => $adsModel,
        ]);
    }
    
    
    public function actionNewAds()
    {
        $model = new Ads();
        $model->user_id = Yii::$app->user->id;
        $model->created_at = time().'';
        $model->updated_at = time().'';
        $model->status = 1;
        if ($model->load(Yii::$app->request->post())) 
        {
            $model->saveAds();
            
            return $this->redirect(['view-my-ads', 'aid' => $model->id]);
        } else {
            return $this->renderAjax('new_ads', [
                'model' => $model,
            ]);
        }
    }
    
    
    public function actionEditAds($aid)
    {
        $model = Ads::findOne($aid);
        if ($model->load(Yii::$app->request->post())) 
        {
            if($model->saveAds())
            {
                $model->addCategory();
            }
        }
        
        $categoryItems = ArrayHelper::map(Category::find()->asArray()->all(), 'id', 'name');
        return $this->renderAjax('edit_myads', [
            'model' => $model,
            'categoryItems' => $categoryItems,
        ]);
        
    }
}
