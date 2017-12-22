<?php

use yii\db\Migration;

/**
 * Handles the creation of table `ads_category`.
 */
class m171104_160514_create_ads_category_table extends Migration
{
    public $tableName ='ads_category';
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'ads_id' => $this->integer()->comment('شناسه تبلیغ'),
            'category_id'=> $this->integer()->comment('شناسه دسته بندی'),
        ]);
        
        $this->createIndex('idx_ads_category_ads_id', $this->tableName, 'ads_id');
        $this->createIndex('idx_ads_category_category_id', $this->tableName, 'category_id');
        
        
        $this->addForeignKey('fk_ads_category_ads_id', $this->tableName, 'ads_id', 'ads', 'id');
        $this->addForeignKey('fk_ads_category_cat_id', $this->tableName, 'category_id', 'category', 'id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('ads_category');
    }
}
