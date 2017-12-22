<?php


namespace backend\modules\ads\models;

/**
 * Description of PlanSearch
 *
 * @author RF
 */
class PlanSearch extends Plan {
        public function search($params) {
        $query = Plan::find();
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }
}
