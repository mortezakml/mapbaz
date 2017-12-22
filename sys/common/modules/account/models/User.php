<?php

namespace common\modules\account\models;

use Yii;

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
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email', 'usertype', 'signuptime', 'authKey'], 'required','message'=>'فیلد را پر کنید'],
            [['usertype', 'signuptime'], 'integer'],
            [['username', 'authKey'], 'string', 'max' => 200],
            [['password', 'email'], 'string', 'max' => 250],
            [['first_name', 'last_name'], 'string', 'max' => 100],
            [['logo'], 'string', 'max' => 500],
            [['username'], 'unique','message'=>'کاربر قبلا ثبت شده است'],
            [['email'], 'email','message'=>'ایمیل معتبر نیست'],
            [['email'], 'unique','message'=>'این کاربر قبلا ثبت شده است'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'شناسه',
            'username' => 'نام کاربری',
            'password' => 'رمز',
            'email' => 'ایمیل',
            'first_name' => 'نام',
            'last_name' => 'نام خانوادگی',
            'logo' => 'تصویر',
            'usertype' => 'نوع کاربر',
            'signuptime' => 'زمان ثبت نام',
            'authKey' => 'کلید اعتبار',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLinks()
    {
        return $this->hasMany(Link::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser_type()
    {
        return $this->hasOne(Usertype::className(), ['id' => 'usertype']);
    }

    
    public function getProfile()
    {
        return $this->hasOne(Profile::className(), ['user_id' => 'id']);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @return boolean if password provided is valid for current user
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
       
    }

    public function genarateAuthKey()
    {
        $this->authKey = Yii::$app->getSecurity()->generateRandomString();
    }
}
