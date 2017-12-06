<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m170812_160132_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'password_hash' => $this->string()->notNull(),          
            'status' => $this->smallInteger()->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'account_activation_token' => $this->string(),          
            'created_at' => $this->string()->notNull(),
            'updated_at' => $this->string()->notNull(),
            'level' => $this->integer()->notNull(),
            'logo' => $this->string(40),
        ]);

        $this->insert("{{%user}}", [
            'username' => 'akbar',
            'password_hash' => Yii::$app->security->generatePasswordHash("123456"),
            'email' => 'akbar.joody@gmail.com',
            'status' => 1,
            'auth_key' => Yii::$app->security->generateRandomString(),
            'created_at' => time().'',
            'updated_at' => time().'',
            'level' => 1,
        ]);
        $this->insert("{{%user}}", [
            'username' => 'aref',
            'password_hash' => Yii::$app->security->generatePasswordHash("123456"),
            'email' => 'rf.mohammadzade.am@gmail.com',
            'status' => 1,
            'auth_key' => Yii::$app->security->generateRandomString(),
            'created_at' => time().'',
            'updated_at' => time().'',
            'level' => 1,
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
