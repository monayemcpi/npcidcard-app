<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('image')->nullable();
            $table->integer('roll');
            $table->integer('reg');
            $table->integer('department_id');
            $table->integer('semester_id');
            $table->string('session');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('mobile_no');
            $table->string('blood_group')->nullable();
            $table->text('address')->nullable();
            $table->string('emr_contact_no');
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
        Schema::dropIfExists('students');
    }
}
