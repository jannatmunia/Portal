<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {

    Schema::create('jobs', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('user_id');
      $table->integer('category_id');
      $table->string('job_title',100);
      $table->string('com_name',50);
      $table->integer('vacancy');
      $table->text('job_context');
      $table->string('job_type',50);
      $table->text('description',200);
      $table->string('location',50);
      $table->float('salary');
      $table->string('status');
      $table->timestamps();

    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('jobs');
  }
}
