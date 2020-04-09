<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeTable extends Model
{
    protected $fillable = [
        'subject_id',
        'class_id',
        'yearofexam',
        'exam',
        'date',
        'start_time',
        'end_time'
    ];
}
