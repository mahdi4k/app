<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fuelCar extends Model
{
    protected $fillable = ['fuelTank','currentPetrol','currentKilo','paymentFuel','fuelNote','fuelImage'];
}
