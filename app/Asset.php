<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = [
        'barcode',
        'serial',
        'name',
        'description',
        'brand',
        'model',
        'warranty',
        'condition',
        'life_time',
        'depreciation_rate',
        'area_id',
        'branch_id',
        'supplier_id',
        'section_id',
        'user_id',
        'status',
        'purchase_date',
        'purchase_price',
        'receipt_code',
        'receipt_date',
        'maintenance_date',
        'image',
        'created_at',
        'updated_at'
    ];



    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

}
