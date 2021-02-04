<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ddd}}`.
 */
class m210203_115939_create_ddd_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('MyCountry', [
            'id' => $this->primaryKey()->notNull()->unique(),
            'code'=>$this->string(3)->notNull(),//->check("code = 'USA' OR code = 'RU'"),
            'name'=>$this->string(15)->notNull(),
            'population'=>$this->integer(1)->notNull(),
        ]);
        $this->insert('MyCountry',['code'=>'RU','name'=>'Russia','population'=>2323233]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ddd}}');
    }
}
