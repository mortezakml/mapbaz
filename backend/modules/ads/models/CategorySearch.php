<?php


namespace backend\modules\ads\models;

/**
 * Description of CategorySearch
 *
 * @author asus
 */
class CategorySearch extends Category{
    public function search($params) {
        $query = Category::find();
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }
}
