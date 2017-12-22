<?php

use yii\db\Migration;

class m171117_110402_create_table_inout extends Migration
{
 
    public $tableName='inout';


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable($this->tableName, [
            'id'=> $this->primaryKey(),
            'ads_id'=> $this->integer(),
            'count_in'=> $this->integer()->comment('تعداد تبلیغ هایی که کرده است'),
            'count_out'=> $this->integer()->comment('تعداد تبلیغ هایی که شده است'),
        ]);
            
        $this->createIndex('idx_inout_ads_id', $this->tableName, 'ads_id');
        
        $this->addForeignKey('fk_inout_ads_id', $this->tableName, 'ads_id', 'ads', 'id');
    }

    public function down()
    {
        echo "m171117_110402_create_table_inout cannot be reverted.\n";

        return false;
    }
    
}
