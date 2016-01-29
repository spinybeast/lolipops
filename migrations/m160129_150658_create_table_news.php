<?php

use yii\db\Schema;
use yii\db\Migration;

class m160129_150658_create_table_news extends Migration
{
    public function up()
    {
        $this->createTable('news', [
            'id'     => 'pk',
            'title'  => Schema::TYPE_STRING . ' NOT NULL',
            'text'  => Schema::TYPE_TEXT . ' NOT NULL',
            'created_at'   => Schema::TYPE_DATETIME . ' NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('news');
    }
}
