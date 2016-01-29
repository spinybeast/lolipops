<?php

use yii\db\Schema;
use yii\db\Migration;

class m160129_150327_create_table_concerts extends Migration
{
    public function up()
    {
        $this->createTable('concerts', [
            'id'     => 'pk',
            'country'  => Schema::TYPE_STRING . ' NOT NULL',
            'city'  => Schema::TYPE_STRING . ' NOT NULL',
            'place'   => Schema::TYPE_TEXT . ' NOT NULL',
            'date' => Schema::TYPE_DATETIME,
            'link'  => Schema::TYPE_STRING
        ]);
    }

    public function down()
    {
        $this->dropTable('concerts');
    }

}
