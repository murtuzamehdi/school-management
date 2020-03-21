<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $primaryKey = 'parent_id';
    protected $fillable = [
        'father_name',
        'father_email',
        'father_phone_number',
        'father_address',
        'father_cnic',
        'father_occupation',
        'father_annual_income',
        
        'mother_name',
        'mother_email',
        'mother_phone_number',
        'mother_address',
        'mother_cnic',
        'mother_occupation',
        'mother_annual_income',

        'father_user_id',
        'mother_user_id',
        
    ];
}
