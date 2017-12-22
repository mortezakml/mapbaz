<?php
namespace common\modules\account\models;

use yii\base\Model;

class SignupForm extends Model
{
    /**
     * @var string نام كاربري
     */
    public $username;
    
    /**
     *
     * @var string رمز 
     */
    public $password;
    
    /**
     *
     * @var string تكرار رمز
     */
    public $password_repeat;
    
    /**
     *
     * @var string ايميل
     */
    public $email;
    
    /**
     *
     * @var string كد امنيتي
     */
    public $verifyCode;

    public function rules()
    {
        return [
            ['username' ,'filter', 'filter' => 'trim'],	
            ['username', 'required','message'=>'نام کاربری را وارد کنید'],
            ['username', 'unique', 'targetClass' => 'app\modules\account\models\User','message'=>'متاسفانه این کاربر قبلا ثبت شده است'],
            ['username', 'string', 'min' => 3,'message'=>'حداقل 3 کاراکتر وارد کنید'],

            ['email' ,'filter', 'filter' => 'trim'],
            ['email', 'required','message'=>'ایمیل وارد نشده است'],
            ['email', 'unique', 'targetClass' => 'app\modules\account\models\User','message'=>'متاسفانه این ايميل قبلا ثبت شده است'],
            ['email', 'email','message'=>'ایمیل صحیح نیست'],


            ['password', 'required','message'=>'رمز وارد نشده است'],
            ['password', 'string', 'min' => 6,'message'=>'حداقل 6 کاراکتر وارد کنید'],

            ['password_repeat', 'required','message'=>'تکرار رمز وارد نشده است'],
            ['password_repeat', 'string','min' => 6,'message'=>'حداقل 6 کاراکتر وارد کنید'],

            [['password'], 'compare', 'operator' => '==','message'=>'تکرار رمز اشتباه است'],

            ['verifyCode', 'captcha', 'captchaAction' => \yii\helpers\Url::toRoute(['default/captcha'])],
            [['username', 'password'], 'character'],               
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'نام كاربري',
            'email' => 'ایمیل' ,
            'verifyCode' => 'کد امنیتی' ,
            'password' => 'تكرار رمز',
            'password_repeat' => 'رمز'
        ];
    }
    
    /**
     * 
     * @return \app\modules\ads\models\User
     * يك كاربر را درج كرده و بر ميكرداند
     */
    public function signup()
    {
        if($this->validate())
        {
            $user = new User();
            $user->username = strtolower($this->username);
            $user->email = strtolower($this->email);
            $user->password = sha1(strtolower($this->password));
            $user->usertype = 2;
            $user->signuptime = time();
            $user->genarateAuthKey();
            $user->save();
            return $user;
        }

        return null;
    }

    public function character($attribute)
    {            
        $char=['0','1','2','3','4','5','6','7','8','9',
        'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
        'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
        '.','-','_','@'];
        for ($i=0; $i < strlen($this->$attribute); $i++) 
        { 
            $tmp=substr($this->$attribute, $i , 1);          
            if(!in_array($tmp, $char))
            {
               $this->addError($attribute, 'کاراکترهای مجاز : حروف انگلیسی و  -._@');
               break;
            }
        }              
    }


}
