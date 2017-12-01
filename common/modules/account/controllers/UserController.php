<?php

namespace common\modules\account\controllers;

use Yii;
use yii\web\Controller;
use common\modules\account\models\LoginForm;
use common\modules\account\models\SignupForm;
use common\modules\account\models\UserSearch;
use common\modules\account\models\SendMessageForm;
use yii\web\UploadedFile;

class UserController extends Controller

{ 
    public $layout = '//admin';


    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionList()
    {
        $userSearchModel = new \common\modules\account\models\UserSearch();
        $dataProvider = $userSearchModel->search(Yii::$app->request->queryParams);
        
        
        return $this->render('list',[
            'userSearchModel' => $userSearchModel,
            'dataProvider'=>$dataProvider
        ]);
        
    }
    
    public function actionDelete($id)
    {
        $userModel= User::findOne($id);
        $userModel->delete();
        $this->redirect(['list']);
    }
    
    public function actionUpdate($id)
    {
  
        $userModel= User::findOne($id);
        $userModel->updated_at= time().'';
        $userModel->auth_key= \Yii::$app->security->generateRandomString();
        if ($userModel->load(\Yii::$app->request->post()) && $userModel->validate()){
            $userModel->password_hash= \Yii::$app->security->generatePasswordHash($userModel->password_hash);
            $userModel->save();
           $this->redirect(['list']);
        }
      return  $this->renderAjax('update',[
          'userModel'=>$userModel
      ]);
    }
    
    public $defaultAction = 'login';

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    
    public function actionIndex()
    {
        $userSearchModel = new UserSearch();
        $dataProvider = $userSearchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }
    
    public function actionLogin()
    {
        $this->layout = "\\login";
        if(!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        $model->setCountLogin();
        if(Yii::$app->request->post()){ 
            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                return $this->redirect(['/dashboard']);
            }
        }
	
        return $this->render('login', [
           'model' => $model,
        ]);
    }
    
    public function actionSignup(){ 
       	if(!Yii::$app->user->isGuest)
            return $this->redirect('@adshome');
        $model = new SignupForm();
        if($model->load(Yii::$app->request->post())){
            $user = $model->signup();
                if(!empty($user) and Yii::$app->user->login($user))
                    return $this->redirect('@admin');
        }
        return $this->render('signup', [
            'model' => $model,
        ]);
    }
    
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    
    public function actionLoginMobile($authkey)
    {
        $userModel = \common\modules\account\models\User::find()->where(['auth_key'=> $authkey])->one();
        if(isset($userModel))
        {
            return 1;
        }
        else{
            return 0;
        }
        
    }
    
    /**
     * 
     * @param type $cid chat id
     */
    public function actionSendMessage($cid)
    {
        $sendMessageFormModel = new SendMessageForm();
        $sendMessageFormModel->chat_id =$cid;
        if($sendMessageFormModel->load(Yii::$app->request->post()))
        {
            $sendMessageFormModel->file = UploadedFile::getInstance($sendMessageFormModel, 'file');
            $sendMessageFormModel ->send();
        }
        return $this->render('send_message', [
            'sendMessageFormModel' => $sendMessageFormModel,
        ]);
    }
}
