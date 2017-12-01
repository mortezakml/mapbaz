<?php

use yii\db\Migration;

/**
 * Handles the creation of table `plan`.
 */
class m171103_111711_create_plan_table extends Migration
{
    public $tableName = 'plan';
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'name' => $this->string(45)->comment('عنوان'),
            'description' => $this->string(45)->comment('توضیحات'),
            'days' => $this->integer()->comment('تعداد روزهای رزو تبلیغ'),
            'status' => $this->boolean()->comment('وضعیت'),
        ]);
        $this->db->createCommand()->insert($this->tableName, [
            'name' => 'طرح رایگان سه ماهه',
            'days' => 90,
            'status' => 1
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('plan');
    }
}
