<?php

namespace common\modules\account\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;
    public $verifyCode;
    private $_user = false;
    public $countLogin;
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        $rules =[
            // username and password are both required
            [['username', 'password'], 'required','message'=>'فیلد را پر کنید'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
            ['username', 'string', 'min' => 3, 'tooShort' => 'نام كاربري بايد بيش ازسه كاراكتر باشد'],
            ['password', 'string', 'min' => 6, 'tooShort' => 'گذر واژه بايد بيش از شش كاراكتر باشد'],
        ];
        // $countLogin = Yii::$app->getSession()->get('countLogin');
        // if(isset($countLogin) and $countLogin >= 3){
        //     $rules[] = ['verifyCode', 'captcha', 'captchaAction' => '/ads/default/captcha', 'message' => 'كد تصوير را وارد كنيد'];
        // }
        return $rules;
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword(strtolower($this->password))) {
                $this->addError($attribute, 'رمز عبور یا نام کاربری اشتباه است');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {   
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 2500 : 0);
        } else {
            return false;
        }
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername(strtolower($this->username));
        }
        return $this->_user;
    }

    public function attributeLabels() {
        return [
          'username' => 'نام کاربری',
          'password' => 'گذر واژه',
          'rememberMe' => 'من را بخاطر بسپار',
          'verifyCode' => 'کد امنیتی',
        ];
    }
    
    public function setCountLogin(){
        $this->countLogin = Yii::$app->getSession()->get('countLogin');
        if(!isset($this->countLogin)){
            Yii::$app->getSession()->set('countLogin', 1);
            $this->countLogin = 1;
        }
        else{
            Yii::$app->getSession()->set('countLogin', $this->countLogin+=1);
        }
        
    }
}
