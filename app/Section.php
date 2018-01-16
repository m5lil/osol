<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'section_name', 'branch_id', 'value'
    ];

}
