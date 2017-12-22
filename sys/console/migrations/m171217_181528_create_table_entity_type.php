<?php

use yii\db\Migration;

/**
 * Class m171217_181528_create_table_entity_type
 */
class m171217_181528_create_table_entity_type extends Migration
{
    public $tableName = "entity_type";
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'name' => $this->string(45)->notNull(),
        ]);
        
        $this->db->createCommand()->batchInsert($this->tableName, ['name'], [
            ['تصویری'],
            ['متنی'],
            ['انیمیشن']
        ])->execute();
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171217_181528_create_table_entity_type cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171217_181528_create_table_entity_type cannot be reverted.\n";

        return false;
    }
    */
}
