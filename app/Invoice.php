<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'product_id',
        'supplier_id',
        'purchase_date',
        'quantity',
        'amount',
    ];
}
