<?php

use yii\db\Migration;

class m171117_111230_create_table_inout_info extends Migration
{
    public $tableName='inout_info';



    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable($this->tableName, [
            'id'=> $this->primaryKey(),
            'created_at'=> $this->string(15),
            'link_request'=> $this->string(300),
            'inout_id'=> $this->integer(),
        ]);
        
        $this->createIndex('idx_inout_info_inout_id', $this->tableName, 'inout_id');
        
        $this->addForeignKey('fk_inout_info_inout_id', $this->tableName, 'inout_id', 'inout', 'id');
    }

    public function down()
    {
        echo "m171117_111230_create_table_inout_info cannot be reverted.\n";

        return false;
    }
 
}
