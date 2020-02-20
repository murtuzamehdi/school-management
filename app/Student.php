<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'school_name',
        'school_roll_no',
        'school_gender',
        'school_dob',
        'school_blood_group',
        'school_nationality',
        'school_religion',
        'school_address',
        'school_date_of_admission',
        'school_previous_school',
        'user_id',
    ];
}
