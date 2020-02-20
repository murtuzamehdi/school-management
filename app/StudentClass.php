<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    protected $fillable = [
        'student_id',
        'year',
        'roll_no',
        'class',
        'section',
        'subject',
        'max_marks',
        'obt_marks',
        'subject_teacher',
    ];
}
