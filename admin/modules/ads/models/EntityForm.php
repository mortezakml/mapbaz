<?php
namespace backend\modules\ads\models;

/**
 * Description of EntityForm
 *
 * @author asus
 */
class EntityForm extends \yii\base\Model{
    
    public $code;
    
    public $status;
    
    public $type;
    
    public $data;

    public $showCodeBox = 0;


    public function rules() {
        return [
            [['type', 'status', 'data'], 'required'],
            [['type', 'status'], 'integer']
        ];
    }
    
    
    public function addEntity($params, $aid)
    {
        
    }
    
    
    public function attributeLabels() {
        return [
            'type' => 'نوع تبلیغ من'
        ];
    }
    
}
