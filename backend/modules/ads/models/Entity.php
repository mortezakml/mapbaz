<?php

namespace backend\modules\ads\models;

use Yii;

/**
 * This is the model class for table "entity".
 *
 * @property integer $id
 * @property integer $ads_id
 * @property integer $type
 * @property string $file
 * @property integer $status
 *
 * @property Ads $ads
 */
class Entity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'entity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ads_id', 'type', 'status'], 'integer'],
            [['file'], 'string', 'max' => 40],
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
            'type' => 'Type',
            'file' => 'File',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAds()
    {
        return $this->hasOne(Ads::className(), ['id' => 'ads_id']);
    }
}
