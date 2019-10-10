<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{

     protected $fillable = ['name','brand','engineVolume','yearMake','carTag',
         'chassisNumber','carsNote','currentKilo','BuckVolume','percentVolume','userType'];

     public function user(){
         return $this->belongsTo(User::class);
     }
    public function fuelCars(){

        return $this->belongsToMany(fuelCar::class,'car_fuel','car_id','fuel_id');

    }
}
