<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->increments('id');
      $table->string('type')->nullable();
      $table->string('name',128);
      $table->string('email',128)->unique();
      $table->string('password',64)->nullbale();
      $table->string('confirmed_passwrod',64)->nullable();
      $table->timestamps();
      $table->rememberToken();

    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('users');
  }
}
