<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamp = false;
    protected $fillable = [
       'id', 'name', 'price', 'description', 'image'
    ];

    public function getSales()
    {
        return $this->hasOne(Sale::class,'id','sales_id');
    }
}