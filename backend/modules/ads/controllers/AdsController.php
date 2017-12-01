<?php

namespace backend\modules\ads\controllers;

use Yii;
use backend\modules\ads\models\Ads;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\modules\ads\models\Type;
use yii\helpers\ArrayHelper;
use backend\modules\ads\models\Plan;

/**
 * AdsController implements the CRUD actions for Ads model.
 */
class AdsController extends Controller
{
    public $layout = '//admin';
    
    public $defaultAction = 'index';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'only' => ['index'],
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                ]
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Ads models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Ads::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ads model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Ads model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Ads();
        $model->user_id = Yii::$app->user->id;
        $model->created_at = time().'';
        $model->updated_at = time().'';
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $typeItems = ArrayHelper::map(Type::find()->asArray()->all(), 'id', 'name');
            $planItems = ArrayHelper::map(Plan::find()->asArray()->all(), 'id', 'name');
            return $this->render('create', [
                'model' => $model,
                'typeItems' => $typeItems,
                'planItems' => $planItems
            ]);
        }
    }

    /**
     * Updates an existing Ads model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($aid)
    {
        $model = $this->findModel($aid);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $typeItems = ArrayHelper::map(Type::find()->asArray()->all(), 'id', 'name');
            $planItems = ArrayHelper::map(Plan::find()->asArray()->all(), 'id', 'name');
            return $this->renderAjax('update', [
                'model' => $model,
                'typeItems' => $typeItems,
                'planItems' => $planItems
            ]);
        }
    }

    /**
     * Deletes an existing Ads model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    
    /**
     * Finds the Ads model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Ads the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Ads::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
