<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{

    use Sluggable;

     protected $fillable = ['name','brand','engineVolume','yearMake','carTag',
         'chassisNumber','carsNote','currentKilo','BuckVolume','percentVolume','userType','slug'];

     public function user(){
         return $this->belongsTo(User::class);
     }
    public function fuelCars(){

        return $this->belongsToMany(fuelCar::class,'car_fuel','car_id','fuel_id');

    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function repair()
    {
        return $this->hasMany(repairCar::class,'car_id');
    }
}
