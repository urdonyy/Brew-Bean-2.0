<?php

require_once __DIR__ . '/../Migrations.php';

require_once __DIR__ . '/../BluePrint.php';
/*
|---------------------------------------------
| Sample User Migration
|---------------------------------------------
|
| Here is where you can define your migrations
|
*/
class CreateUser extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique('email');
            $table->string('password');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
