<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('student_name');
            $table->string('student_roll_no');
            $table->string('student_gender');
            $table->date('student_dob');
            $table->string('student_blood_group');
            $table->string('student_nationality');
            $table->string('student_religion');
            $table->string('student_address');
            $table->string('student_phone_number');
            $table->string('student_pic_path');
            $table->date('student_date_of_admission');
            $table->string('student_previous_school');
            $table->string('student_disability');

            $table->string('user_id');
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
