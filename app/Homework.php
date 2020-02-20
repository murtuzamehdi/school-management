<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    protected $fillable = [
        'homework',    
        'file_path',    
        'description',    
        'start_date',    
        'end_date',    
        'class_section_id',    
        'subject_id',    
    ];
}
