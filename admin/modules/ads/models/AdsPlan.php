<?php

namespace backend\modules\ads\models;

use Yii;

/**
 * This is the model class for table "ads_plan".
 *
 * @property integer $id
 * @property integer $ads_id
 * @property integer $plan_id
 *
 * @property Ads $ads
 * @property Plan $plan
 */
class AdsPlan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ads_plan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ads_id', 'plan_id'], 'integer'],
            [['ads_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ads::className(), 'targetAttribute' => ['ads_id' => 'id']],
            [['plan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Plan::className(), 'targetAttribute' => ['plan_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ads_id' => 'Ads ID',
            'plan_id' => 'Plan ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAds()
    {
        return $this->hasOne(Ads::className(), ['id' => 'ads_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlan()
    {
        return $this->hasOne(Plan::className(), ['id' => 'plan_id']);
    }
}
