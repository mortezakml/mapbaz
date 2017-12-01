<?php

namespace backend\modules\ads\models;

use Yii;

/**
 * This is the model class for table "ads_category".
 *
 * @property integer $id
 * @property integer $ads_id
 * @property integer $category_id
 */
class AdsCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ads_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ads_id', 'category_id'], 'integer'],
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
            'category_id' => 'Category ID',
        ];
    }
    
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
