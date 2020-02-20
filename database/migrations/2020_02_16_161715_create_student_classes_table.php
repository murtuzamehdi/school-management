<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_class_info', function (Blueprint $table) {
            $table->bigInteger('student_id');
            $table->bigInteger('year');
            $table->primary(['student_id' , 'year']);
            
            $table->string('roll_no');
            $table->string('class');
            $table->string('section');
            $table->string('subject');
            $table->string('max_marks');
            $table->string('obt_marks');
            $table->string('subject_teacher');

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
        Schema::dropIfExists('student_classes');
    }
}
