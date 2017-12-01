<?php

namespace backend\modules\ads\models;

use Yii;

/**
 * This is the model class for table "plan".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $days
 * @property integer $status
 *
 * @property Ads[] $ads
 * @property AdsPlan[] $adsPlans
 */
class Plan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'plan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['days', 'status'], 'integer'],
            [['name', 'description'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Title',
            'description' => 'Description',
            'days' => 'Days',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAds()
    {
        return $this->hasMany(Ads::className(), ['plan_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdsPlans()
    {
        return $this->hasMany(AdsPlan::className(), ['plan_id' => 'id']);
    }
    
    
    public function getIsWinWin()
    {
        //طرح برد برد
        if($this->id == 1)
        {
            return true;
        }
    }
}
