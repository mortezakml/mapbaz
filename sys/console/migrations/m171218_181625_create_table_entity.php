<?php

use yii\db\Migration;

class m171218_181625_create_table_entity extends Migration
{

    public $tableName = "entity";


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'ads_id' => $this->integer(),
            'type_id' => $this->integer(),
            'file' => $this->string(40),
            'status' => $this->boolean(),
        ]);
        
        $this->createIndex('idx_entity_ads_id', $this->tableName, 'ads_id');
        $this->createIndex('idx_entity_type_id', $this->tableName, 'type_id');
        
        $this->addForeignKey('fk_entity_ads_id', $this->tableName, 'ads_id', 'ads', 'id');
        $this->addForeignKey('fk_entity_type_id', $this->tableName, 'ads_id', 'ads', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('fk_entity_ads_id', $this->tableName);
        $this->dropForeignKey('fk_entity_type_id', $this->tableName);
        $this->dropTable($this->tableName);
    }
   
}
