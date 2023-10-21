<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servant extends Model
{
    use HasFactory;

    protected $fillable = ['name','address','job'];
    public function sales()
    {

        return $this->hasMany(sale::class);
    }

}
