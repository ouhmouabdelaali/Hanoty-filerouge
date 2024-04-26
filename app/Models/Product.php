<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'description', 'provider_id', 'sous_category_id'];

    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }

    public function sousCategory()
    {
        return $this->belongsTo(SousCategory::class);
    }

    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}

