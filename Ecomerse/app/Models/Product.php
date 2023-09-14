<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['tile','image','author', 'page_number', 'price', 'discount','priceafterdiscount','count','categories_id'];

    function categories()
    {
        return $this->belongsTo(categories::class);

    }
    function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }


}
