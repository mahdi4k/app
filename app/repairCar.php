<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class repairCar extends Model
{
     protected $fillable = ['currentKilo','repairPlace','typeRepair','noteRepair'];
}
