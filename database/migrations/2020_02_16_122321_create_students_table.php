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
            $table->string('student_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('parent_cnic')->nullable();
            $table->string('student_email')->nullable();

            $table->string('student_roll_no')->nullable();
            $table->string('student_gender')->nullable();
            $table->date('student_dob')->nullable();
            $table->string('student_blood_group')->nullable();
            $table->string('student_nationality')->nullable();
            $table->string('student_religion')->nullable();
            $table->string('student_address')->nullable();
            $table->string('student_phone_number')->nullable();
            $table->string('student_pic_path')->nullable();
            $table->date('student_date_of_admission')->nullable();
            $table->string('student_class_of_admission')->nullable();
            $table->string('student_class_section')->nullable();
            $table->string('student_previous_school')->nullable();
            $table->string('student_disability')->nullable();

            $table->integer('parent_id')->nullable();
            $table->integer('user_id')->nullable();
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
