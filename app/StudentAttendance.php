<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAttendance extends Model
{
    protected $fillable = [
        'student_id',
        'date',
        'teacher_id',
        'status',
        'class_id',
        'roll_no',
        'remarks',
    ];
}
