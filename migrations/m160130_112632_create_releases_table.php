<?php

use yii\db\Schema;
use yii\db\Migration;

class m160130_112632_create_releases_table extends Migration
{
    public function up()
    {
        $this->createTable('releases', [
            'id'     => 'pk',
            'cover'  => Schema::TYPE_STRING . ' NOT NULL',
            'title'  => Schema::TYPE_STRING . ' NOT NULL',
            'description'  => Schema::TYPE_TEXT . ' NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('releases');
    }
}
