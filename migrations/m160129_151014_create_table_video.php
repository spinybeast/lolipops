<?php

use yii\db\Schema;
use yii\db\Migration;

class m160129_151014_create_table_video extends Migration
{
    public function up()
    {
        $this->createTable('video', [
            'id'     => 'pk',
            'link'  => Schema::TYPE_STRING . ' NOT NULL',
            'description'  => Schema::TYPE_TEXT . ' NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('video');
    }
}
