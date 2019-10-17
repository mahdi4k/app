<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class repairCar extends Model
{
     use Sluggable;
     protected $fillable = ['currentKilo','repairPlace','typeRepair','noteRepair','slug','user_id','car_id'];


    public function car()
    {
        return $this->belongsTo(car::class,'car_id');
     }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'slug'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}

