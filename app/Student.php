<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'student_id';
    protected $fillable = [
        'student_name',
        'father_name',
        'parent_cnic',
        'student_email',
        
        'student_roll_no',
        'student_gender',
        'student_dob',
        'student_blood_group',
        'student_nationality',
        'student_religion',
        'student_address',
        'student_phone_number',
        'student_pic_path',
        'student_date_of_admission',
        'student_class_of_admission',
        'student_class_section',
        'student_previous_school',
        'student_disability',
        'parent_id',
        'user_id',
    ];
}
