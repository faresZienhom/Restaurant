<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderReceived extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email','phone', 'city', 'country','Address1','Address2','code','message','tracking_no','status'];

}
