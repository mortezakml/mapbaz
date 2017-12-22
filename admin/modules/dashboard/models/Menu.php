<?php

namespace app\modules\dashboard\models;

use Yii;

/**
 * This is the model class for table "tbl_menu".
 *
 * @property integer $id
 * @property string $title
 * @property string $href
 * @property integer $parent_id
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'href', 'parent_id'], 'required'],
            [['parent_id'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['href'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'href' => 'Href',
            'parent_id' => 'Parent ID',
        ];
    }
    
    public function getChilds() {
        return $this->hasMany(Menu::className(), ['parent_id' => 'id']);
    }
}
