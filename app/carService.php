<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carService extends Model
{
     protected $fillable = ['repairShop','KiloWorked','serviceType','serviceImage','totalPrice'];
}
