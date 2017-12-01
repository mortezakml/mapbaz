<?php

use yii\db\Migration;

/**
 * Handles the creation of table `ads_plan`.
 */
class m171104_160511_create_ads_plan_table extends Migration
{
    public $tableName = 'ads_plan';
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'ads_id' => $this->integer()->comment('شناسه تبلیغ'),
            'plan_id' => $this->integer()->comment('شناسه پلن'),
        ]);
        
        $this->createIndex('idx_ads_plan_ads_id', $this->tableName, 'ads_id');
        $this->createIndex('idx_ads_plan_plan_id', $this->tableName, 'plan_id');
        
        $this->addForeignKey('fk_ads_plan_ads_id', $this->tableName, 'ads_id', 'ads', 'id');
        $this->addForeignKey('fk_ads_plan_plan_id', $this->tableName, 'plan_id', 'plan', 'id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('ads_plan');
    }
}
