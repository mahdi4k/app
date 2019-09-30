<?php

namespace App\Http\Controllers;

use App\fuelCar;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Charts\PetrolChart;
use Illuminate\Support\Facades\Hash;
use Morilog\Jalali\Jalalian;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $t = jdate('today')->format('t');
        $y = Jalalian::forge('today')->format('%y');//98
        $d = Jalalian::forge('today')->format('%d');//07



        $date_list = array();
        $petrol = array();
        for ($i = 1; $i <= $t; $i++) {
            if ($i<10){
                 $date =  $y.' '.'0'.$i  ;
            }else{
                $date =  $y.' '.$i ;
            }

            $date_list[$i] = $date;

            $petrol[$i] = fuelCar::where(['date' => $date, 'user_id' => auth()->user()->id])->sum('currentPetrol');

        }

        return view('home', compact('date_list', 'petrol'));

    }
}
