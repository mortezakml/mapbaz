<?php

namespace app\backend\modules\ads\models;

use Yii;
/**
 * This is the ActiveQuery class for [[Inout]].
 *
 * @see Inout
 */
class InoutQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Inout[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Inout|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
    
    
    public function myAds($aid)
    {
        $adsModel = Ads::find()->where(['user_id' => Yii::$app->user->id, 'id' => $aid])->one();
        if(!isset($adsModel->id))
        {
            throw new \yii\web\HttpException(403, "شما دسترسی به این تبلیغ را ندارید");
        }
        return $this->andWhere(['ads_id' => $aid]);
    }
}
