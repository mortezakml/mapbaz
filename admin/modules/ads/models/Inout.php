<?php

namespace app\backend\modules\ads\models;

use Yii;

/**
 * This is the model class for table "inout".
 *
 * @property integer $id
 * @property integer $ads_id
 * @property integer $count_in
 * @property integer $count_out
 *
 * @property Ads $ads
 * @property InoutInfo[] $inoutInfos
 */
class Inout extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inout';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ads_id', 'count_in', 'count_out'], 'integer'],
            [['ads_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ads::className(), 'targetAttribute' => ['ads_id' => 'id']],
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
            'count_in' => 'Count In',
            'count_out' => 'Count Out',
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
    public function getInoutInfos()
    {
        return $this->hasMany(InoutInfo::className(), ['inout_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return InoutQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new InoutQuery(get_called_class());
    }
}
