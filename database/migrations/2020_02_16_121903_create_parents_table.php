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
            $table->bigIncrements('parent_id');
            $table->string('father_name')->nullable();
            $table->string('father_email')->nullable();
            $table->string('father_phone_number')->nullable();
            $table->string('father_address')->nullable();
            $table->string('father_cnic')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_annual_income')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_email')->nullable();
            $table->string('mother_phone_number')->nullable();
            $table->string('mother_address')->nullable();
            $table->string('mother_cnic')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_annual_income')->nullable();
            
            $table->integer('father_user_id')->nullable();
            $table->integer('mother_user_id')->nullable();
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
