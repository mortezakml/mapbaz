<?php

use yii\db\Migration;

class m171117_104639_create_table_profile extends Migration
{

    public $tableName='profile';


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable($this->tableName, [
            'id'=> $this->primaryKey(),
            'user_id'=> $this->integer(),
            'email'=> $this->string(45)->null(),
            'address'=> $this->string(100)->null(),
            'tel_number'=> $this->string(15)->null(),
            'telegram_id'=> $this->string(45)->null(),
            'website'=> $this->string(45)->null(),
        ]);
        
        $this->createIndex('idx_profile_user_id', $this->tableName, 'user_id');
        
        
        $this->addForeignKey('fk_profile_user_id', $this->tableName, 'user_id', 'user', 'id');
    }

    public function down()
    {
        echo "m171117_104639_create_table_profile cannot be reverted.\n";

        return false;
    }
    
}
