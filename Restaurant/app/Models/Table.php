<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = ['name','guest_number','status'];
    public function sales()
    {

        return $this->belongsToMany(sale::class);
    }

    public function table()
    {
        return $this->hasMany(Table::class);
    }

}
