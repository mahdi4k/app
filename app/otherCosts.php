<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class otherCosts extends Model
{
    protected  $fillable = ['currentKilo','typePrice','seller','totalPrice','note'];
}
