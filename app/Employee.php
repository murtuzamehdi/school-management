<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primaryKey = 'employee_id';
    protected $fillable = [
        'employee_name' ,
        'employee_email' ,
        'employee_designation' ,
        'employee_address',
        'employee_gender',
        'employee_cnic',
        'employee_hireDate',
        'employee_dob',
        'user_id',
        'dept_id',
    ];
}
