<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
     protected $fillable = ['name','brand','engineVolume','yearMake','carTag',
         'chassisNumber','carsNote','currentKilo','BuckVolume','percentVolume','userType'];
}
