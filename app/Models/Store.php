<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone_number', 'email', 'description', 'categorie_id', 'user_id', 'logo', 'image', 'addres_id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categorie_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class, 'addres_id');
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
