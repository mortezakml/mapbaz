<?php
namespace backend\modules\ads\models;

use Yii;
/**
 * Description of AdsQuery
 *
 * @author asus
 */
class AdsQuery extends \yii\db\ActiveQuery{
    
    public function myAds()
    {
        return $this->andWhere(['user_id' => Yii::$app->user->id]);
    }
}
