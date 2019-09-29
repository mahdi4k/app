<?php

namespace App\Http\Controllers;

use App\fuelCar;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Charts\PetrolChart;
use Illuminate\Support\Facades\Hash;


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
         $fuelCar=fuelCar::orderBy('created_at', 'ASC')->where('user_id',auth()->id())->get();

        $y=Carbon::now()->year;
        $m=Carbon::now()->month;
        $t =jdate('today')->format('t');
        $date_list=array();
        $petrol=array();
        for ($i =1 ;$i<=$t;$i++){
             $date = $y.'-'.$m.'-'.$i ;

            $date_list[$i] =$date;

            $petrol[$i]=fuelCar::where(['created_at'=>$date,'user_id'=>auth()->user()->id])->get('currentPetrol');
        }





         return view('home',compact( 'fuelCar','date_list','petrol'));

    }
}
