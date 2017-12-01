<?php

namespace common\modules\account\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $firstname
 * @property string $lastname
 * @property string $logo
 * @property integer $usertype
 * @property integer $signuptime
 * @property string $authKey
 *
 * @property Link[] $links
 * @property Usertype $usertype0
 */
class UserSearch extends User
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email', 'usertype', 'authKey'], 'safe'],
        ];
    }
    
    public function search($params)
    {
        $activeQuery = User::find();
        
        $activeDataProvider = new ActiveDataProvider([
            'query' => $activeQuery,
        ]);
        
        return $activeDataProvider;
    }
}
