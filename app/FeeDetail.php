<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeeDetail extends Model
{
    protected $table ="fee_details";
    // protected $primaryKey = ['student_id','due_date'];

    protected $fillable = [
        'student_id',
        'due_date',
        'fee_month',
        'fees_id',
        'current_ammount',
        'arrears',
        'fee_status',
    ];
}
