<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = ['store_id', 'quantity', 'product_id'];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function stocks()
    {
        return $this->belongsToMany(Stock::class);     // ?? is that trou 
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    // public function product()
    // {
    //     return $this->hasMany(Stock::class);
    // }
}
