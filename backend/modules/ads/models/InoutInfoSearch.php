<?php

namespace app\backend\modules\ads\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "inout_info".
 *
 * @property integer $id
 * @property string $created_at
 * @property string $link_request
 * @property integer $inout_id
 *
 * @property Inout $inout
 */
class InoutInfoSearch extends Inout
{
    public function search($params, $aid)
    {
        $inoutModel = Inout::find()->myAds($aid)->one();
        if(!isset($inoutModel->id))
        {
            throw new \yii\web\HttpException(404, "inout not found");
        }
        $inoutInfoQuery = InoutInfo::find()->where(['inout_id' => $inoutModel->id]);
        $dataProvider = new ActiveDataProvider([
             'query' => $inoutInfoQuery
        ]);
        return $dataProvider;
        
    }
}
