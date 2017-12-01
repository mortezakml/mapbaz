<?php

use yii\db\Migration;

/**
 * Handles the creation of table `type`.
 */
class m171103_115022_create_type_table extends Migration
{
    public $tableName = 'type';
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey()->comment('شناسه'),
            'name' => $this->string(40)->comment('نام نوع تبلیغ'),
        ]);
        
        $this->batchInsert($this->tableName, ['name'], [
            ['تصویری'],
            ['انیمیشن'],
            ['متن']
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('type');
    }
}
