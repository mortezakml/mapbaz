<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment`.
 */
class m171104_160520_create_comment_table extends Migration
{
    public $tableName='comment';
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'text' => $this->string('255')->comment('متن'),
            'created_at' => $this->string(20)->comment('زمان ایجاد'),
            'status' => $this->boolean()->comment('وضعیت'),
            'user_id' => $this->integer()->comment('شناسه کاربر'),
            'ads_id' => $this->integer()->comment('شناسه تبلیغ'),
        ]);
        
        $this->createIndex('idx_comment_user_id', $this->tableName, 'user_id');
        $this->createIndex('idx_comment_ads_id', $this->tableName, 'ads_id');
        
        $this->addForeignKey('fk_comment_user_id', $this->tableName, 'user_id', 'user', 'id');
        $this->addForeignKey('fk_comment_ads_id', $this->tableName, 'ads_id', 'ads', 'id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('comment');
    }
}
