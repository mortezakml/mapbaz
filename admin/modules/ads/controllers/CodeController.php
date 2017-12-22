<?php
namespace backend\modules\ads\controllers;

use Yii;
use backend\modules\ads\models\Ads;
use backend\modules\ads\models\Entity;
use backend\modules\ads\models\EntityType;
use backend\modules\ads\models\EntityForm;
/**
 * Description of CodeController
 *
 * @author asus
 */
class CodeController extends \yii\web\Controller{
    
    
    public function actionGenerateCode($aid)
    {
        if(!Ads::find()->where(['id' => $aid, 'user_id' => Yii::$app->user->id])->exists())
        {
            throw new \yii\web\HttpException(404, 'تبلیغ پیدا نشد');
        }
        $entityForm = new EntityForm();
        
        $typeItems = \yii\helpers\ArrayHelper::map(EntityType::find()->asArray()->all(), 'id', 'name');
        return $this->renderAjax('generate_code', [
            'entityForm' => $entityForm,
            'typeItems' => $typeItems
        ]);
    }
    
    
    public function actionViewEntityCode($aid)
    {
        if(!Ads::find()->where(['id' => $aid, 'user_id' => Yii::$app->user->id])->exists())
        {
            throw new \yii\web\HttpException(404, 'تبلیغ پیدا نشد');
        }
        $entityModel= Entity::find()->where(['ads_id' => $aid])->one();
        
        
        return $this->renderAjax('view_entity_code', [
            'entityModel' => $entityModel,
            'aid' => $aid,
            
        ]);
    }
   
}
