<?php
namespace common\modules\account\controllers;

use Yii;
use yii\rest\Controller;
use yii\web\Response;
/**
 * Description of ApiController
 *
 * @author asus
 */
class ApiController extends Controller{
    
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator']['formats']['text/html'] = Response::FORMAT_JSON;
        return $behaviors;
    }

    public function actionLogin($username, $password)
    {
        $loginForm = new \common\modules\account\models\LoginForm();
        $loginForm->username = $username;
        $loginForm->password = $password;
        if($loginForm->login())
        {
            return [
                'result' => true,
                'auth_key' => \common\modules\account\models\User::findByUsername($username)->authKey,
            ];
        }
        
    }
}
