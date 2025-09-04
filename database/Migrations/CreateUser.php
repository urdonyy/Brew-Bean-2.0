<?php

require_once __DIR__ . '/../Migrations.php';
/*
|---------------------------------------------
| Sample User Migration
|---------------------------------------------
|
| Here is where you can define your migrations
|
*/
class CreateUser extends Migration {
    public function up() {
        $this->createTable([
            'users' => [
                'id' => 'int(11) NOT NULL AUTO_INCREMENT',
                'name' => 'varchar(255) NOT NULL',
                'email' => 'varchar(255) NOT NULL',
                'password' => 'varchar(255) NOT NULL',
            ]
        ]);
    }

    public function down() {
        $this->dropTable('users');
    }
}