<?php

namespace app\backend\modules\ads\models;

use Yii;

/**
 * This is the model class for table "inout_info".
 *
 * @property integer $id
 * @property string $created_at
 * @property string $link_request
 * @property integer $inout_id
 *
 * @property Inout $inout
 */
class InoutInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inout_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inout_id'], 'integer'],
            [['created_at'], 'string', 'max' => 15],
            [['link_request'], 'string', 'max' => 300],
            [['inout_id'], 'exist', 'skipOnError' => true, 'targetClass' => Inout::className(), 'targetAttribute' => ['inout_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'شناسه',
            'created_at' => 'زمان ایجاد',
            'link_request' => 'لینک درخواست دهنده',
            'inout_id' => 'شماسه ورود و خروج',
            'type' => 'نوع',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInout()
    {
        return $this->hasOne(Inout::className(), ['id' => 'inout_id']);
    }
}
