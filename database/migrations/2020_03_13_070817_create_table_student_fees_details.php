<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStudentFeesDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_student_fees_details', function (Blueprint $table) {
            $table->bigInteger('student_id');
            $table->date('due_date');
            $table->primary(['student_id' , 'due_date']);
            $table->string('fee_month')->nullable();
            $table->bigInteger('fees_id')->nullable();
            $table->string('current_ammount')->nullable();
            $table->string('arrears')->nullable();
            $table->string('fee_status')->nullable();

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
        Schema::dropIfExists('table_student_fees_details');
    }
}
