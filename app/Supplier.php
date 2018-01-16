<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'supplier_name', 'next_service', 'contact', 'address'
    ];

}
