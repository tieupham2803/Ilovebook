<?php

use yii\db\Migration;

class m161118_070929_book extends Migration
{
   public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'cate' => $this->string(100)->notNull()->defaultValue(0),
            'image' => $this->string(),
            'slug' => $this->string()->notNull()->unique(),
            'desc' => $this->string(),
            'content' => $this->text()->notNull(),
            'price' => $this->integer()->notNull()->defaultValue(0),
            'quantity' => $this->string()->notNull()->defaultValue(0),
             'page' => $this->string()->notNull(),
            'author' => $this->string(100),
            'status' => $this->string()->notNull()->defaultValue(0),
            'publish_at' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'update_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%book}}');
    }
}
