<?php

namespace app\modules\dashboard\models;

use Yii;

/**
 * This is the model class for table "config".
 *
 * @property integer $id
 * @property string $mode
 * @property string $key
 * @property string $value
 */
class Config extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mode', 'key', 'value'], 'required'],
            [['mode', 'key'], 'string', 'max' => 50],
            [['value'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mode' => 'Mode',
            'key' => 'Key',
            'value' => 'Value',
        ];
    }
}
