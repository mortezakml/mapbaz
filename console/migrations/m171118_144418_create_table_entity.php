<?php

use yii\db\Migration;

class m171118_144418_create_table_entity extends Migration
{

    public $tableName = "entity";


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'ads_id' => $this->integer(),
            'type' => $this->integer(),
            'file' => $this->string(40),
            'status' => $this->boolean(),
        ]);
        
        $this->createIndex('idx_entity_ads_id', $this->tableName, 'ads_id');
        
        $this->addForeignKey('fk_entity_ads_id', $this->tableName, 'ads_id', 'ads', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('fk_entity_ads_id', $this->tableName);
        $this->dropTable($this->tableName);
    }
   
}
