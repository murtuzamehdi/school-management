<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable = [
       'class_id', 'class_name' , 'section'
    ];
}
