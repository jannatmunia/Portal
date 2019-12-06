<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            // $table->integer('jobseekr_id');
            $table->string('jobseeker_name');
            $table->string('jobseeker_address');
            $table->integer('jobseeker_phn_no');
            $table->string('jobseeker_email');
            $table->string('photo');
            $table->string('career_objective');
            $table->string('academic_qualification');
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
        Schema::dropIfExists('resumes');
    }
}
