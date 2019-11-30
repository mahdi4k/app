<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class repairCar extends Model
{

     protected $fillable = ['currentKilo','repairPlace','typeRepair','noteRepair','slug','user_id','car_id'];


    public function car()
    {
        return $this->belongsTo(car::class,'car_id');
    }

     

}

