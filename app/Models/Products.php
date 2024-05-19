<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;


    public function detailsArray(): Attribute
    {
        return Attribute::make(
            get: fn() => explode(', ', $this->details),
        );
    }

    public function orders()
    {
        return $this->belongsToMany(Orders::class, 'order_products')
                    ->withPivot('quantity', 'price')
                    ->withTimestamps();
    }
}
