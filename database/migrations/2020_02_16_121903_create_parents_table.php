<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('father_name');
            $table->string('father_phone_number');
            $table->string('father_cnic');
            $table->string('father_occupation');
            $table->string('father_annual_income');
            $table->string('mother_name');
            $table->string('mother_phone_number');
            $table->string('mother_cnic');
            $table->string('mother_occupation');
            $table->string('mother_annual_income');
            $table->integer('user_id');
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
        Schema::dropIfExists('parents');
    }
}
