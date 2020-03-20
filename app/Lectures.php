<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lectures extends Model
{
    protected $fillable = ['id' , 'lecture' , 'lecture_name' , 'subject_id', 'user_id'];
}
