<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    protected $table ="fees";
    protected $primaryKey ='fees_id';

    protected $fillable = [
        'class_id',
        'annual_charges',
        'lab',
        'tution_fee',
        'year',
        'amount',
    ];
}
