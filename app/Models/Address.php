<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = ['street', 'city', 'state', 'postal_code', 'country'];

    public function stores()
    {
        return $this->hasMany(Store::class);
    }
}
