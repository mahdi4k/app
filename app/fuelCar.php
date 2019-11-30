<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\Jalalian;

class fuelCar extends Model
{
    protected $table = 'fuels';

    protected $fillable = ['fuelTank', 'currentPetrol', 'currentKilo', 'paymentFuel', 'fuelNote', 'fuelImage'];


    /*public static function petrol()
    {
        $petrol = array();

        $y = Jalalian::forge('today')->format('%y');//98
        $t = jdate('today')->format('t');
        $benzin = car::with('fuelCars')->where('user_id', auth()->user()->id)->get();

        foreach ($benzin as $value) {

            foreach ($value->fuelCars as $item) {


                for ($i = 1; $i <= $t; $i++) {
                    if ($i < 10) {
                        $date = $y . ' ' . '0' . $i;
                    } else {
                        $date = $y . ' ' . $i;
                    }
                    $date_list[$i] = $date;

                    $petrol[$i] = 0;

                    if ($date == $item->date) {
                        $petrol[$i] = $item->currentPetrol;
                    }


                }
                $item['petrols'] = $petrol;

            }
        }
      return $benzin;

    }*/


    public static function month()
    {
       /* $y = Jalalian::forge('today')->format('%y');//98
        $t = jdate('today')->format('t');
        for ($i = 1; $i <= $t; $i++) {
            if ($i < 10) {
                $date = $y . ' ' . '0' . $i;
            } else {
                $date = $y . ' ' . $i;
            }
            $date_list[$i] = $date;

        }
        return $date_list;*/
            for($i = 0 ; $i< 12 ; $i++ ){

                $labels[] =jdate(Carbon::now()->subMonth($i))->format('%B');

            }
            return array_reverse($labels);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /*public function car()
    {
        return $this->belongsToMany(car::class, 'car_fuel', 'fuel_id');
    }*/

}
