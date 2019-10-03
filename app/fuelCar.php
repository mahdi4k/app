<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\Jalalian;

class fuelCar extends Model
{
    protected $fillable = ['fuelTank', 'currentPetrol', 'currentKilo', 'paymentFuel', 'fuelNote', 'fuelImage'];


    public static function petrol()
    {
        $petrol = array();

        $y = Jalalian::forge('today')->format('%y');//98
        $t = jdate('today')->format('t');
        $benzin = car::with('fuelCars')->where('user_id', \Illuminate\Support\Facades\Auth::user()->id)->get();
         foreach ($benzin as $item) {

            for ($i = 1; $i <= $t; $i++) {
                if ($i < 10) {
                    $date = $y . ' ' . '0' . $i;
                } else {
                    $date = $y . ' ' . $i;
                }
                $date_list[$i] = $date;

                $petrol[$i] =0;
                if($date == $item->fuelCars->date ){
                    $petrol[$i] = $item->fuelCars->currentPetrol ;
                 }


            }
             $item['petrols']  =$petrol ;
        }
        return $benzin;

    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function month()
    {
        $y = Jalalian::forge('today')->format('%y');//98
        $t = jdate('today')->format('t');
        for ($i = 1; $i <= $t; $i++) {
            if ($i < 10) {
                $date = $y . ' ' . '0' . $i;
            } else {
                $date = $y . ' ' . $i;
            }
            $date_list[$i] = $date;

        }
        return $date_list;
    }

}
/*$y = Jalalian::forge('today')->format('%y');//98
$benzin = car::with('fuelCars')->where('user_id', \Illuminate\Support\Facades\Auth::user()->id)->get();

foreach ($benzin  as $item) {

    for ($i = 1; $i <= 30; $i++) {
        if ($i < 10) {
            $date = $y . ' ' . '0' . $i;
        } else {
            $date = $y . ' ' . $i;
        }
        $date_list[$i] = $date;

        $petrol[$i] =0;
        if($date == $item->fuelCars->date ){
            $petrol[$i] = $item->fuelCars->currentPetrol ;
        }
        $merg=array_merge(['date_list'=>$date_list],['petrol'=>$petrol]);

    }
    dump($merg);
}*/


/*public static function month(){
    $date_list = array();


    $t = jdate('today')->format('t');
    $y = Jalalian::forge('today')->format('%y');//98
    for ($i = 1; $i <= $t; $i++) {
        if ($i < 10) {
            $date = $y . ' ' . '0' . $i;
        } else {
            $date = $y . ' ' . $i;
        }

        $date_list[$i] = $date;
        $petrol[$i] = fuelCar::where(['date' => $date, 'user_id' => auth()->user()->id])->sum('currentPetrol');
        $merg=array_merge(['date_list'=>$date_list],['petrol'=>$petrol]);

    }
    return $merg;
}*/
