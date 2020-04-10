<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_cards', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->integer('subject_id');
           $table->string('year');
           // $table->primary(['subject_id', 'year']);
           $table->integer('student_id')->nullable();
           $table->integer('marks')->nullable();
           $table->integer('obtain_marks')->nullable();
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
        Schema::dropIfExists('report_cards');
    }
}
