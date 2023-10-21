<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image', 'price','categories_id'];


    public function category()
    {
        return $this->belongsTo(Category::class,'categories_id');
    }
    public function sales()
    {
        return $this->belongsToMany(Sale::class);
    }


}
