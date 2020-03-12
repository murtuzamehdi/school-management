<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_name')->nullable();
            $table->string('employee_designation')->nullable();
            $table->string('employee_address')->nullable();
            $table->string('employee_gender')->nullable();
            $table->string('employee_cnic')->nullable();
            $table->string('employee_hireDate')->nullable();
            $table->string('employee_dob')->nullable();
            
            $table->integer('user_id')->nullable();
            $table->integer('dept_id')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
