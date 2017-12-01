<?php

use yii\db\Migration;

/**
 * Handles the creation of table `ads`.
 */
class m171104_160433_create_ads_table extends Migration
{
    public $tableName = "ads";
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'title' => $this->string(50)->notNull(),
            'description' => $this->text()->notNull(),
            'image' => $this->string(100),
            'star' => $this->string(5),
            'rate' => $this->string(20),
            'status' => $this->boolean()->notNull(),
            'tags' => $this->string(100),
            'created_at' => $this->string(30), 
            'updated_at' => $this->string(30),
            'user_id' => $this->integer(),
        ]);
        $this->createIndex('idx_ads_user_id', $this->tableName, 'user_id');
        
        $this->addForeignKey('fk_ads_user_id', $this->tableName, 'user_id', 'user', 'id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('ads');
    }
}
