<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_teachers', function (Blueprint $table) {
            $table->engine = 'MyISAM';

            $table->bigInteger('id');
            $table->bigInteger('subject_id');
            $table->bigInteger('teacher_id');
            $table->string('year');
            $table->primary(['id','subject_id', 'year']);
            $table->timestamps();
        });

        DB::statement('ALTER TABLE subject_teachers MODIFY id INTEGER NOT NULL AUTO_INCREMENT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_teachers');
    }
}
