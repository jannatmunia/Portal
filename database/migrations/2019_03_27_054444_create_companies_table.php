<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('companies', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('user_id');
      $table->string('company_name',50);
      $table->string('company_location',50);
      $table->string('select_category',50);
      $table->string('search_industry_type',50);
      $table->text('company_description',200);
      $table->string('company_website_url',200);
      $table->string('contact_person_name',50);
      $table->string('contact_person_designation',50);
      $table->string('contact_person_email',50)->unique();
      $table->integer('contact_person_phone_number');
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
    Schema::dropIfExists('companies');
  }
}
