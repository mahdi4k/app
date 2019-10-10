<?php

namespace App\Http\Controllers;

use App\car;
use App\fuelCar;
use App\User;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{

     protected $userId;
    public function __construct()
    {
    $this->middleware(function (Request $request,$next){
        if (!Auth::check()){
            return view('welcome');

        }
             $this->userId =Auth::id();
            return $next($request);

    });

    }

    public function index()
    {
        $Cars = Auth::user()->getCars()->get();
      //$Cars =car::where('user_id',$this->userId)->get();

      return view('sections.car.all',compact('Cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(car $Car)
    {

            $month = 12;
            $fuel = fuelCar::selectRaw(' monthname(date) month ,sum(currentpetrol) sumpetrol')->where('car_id',$Car->id)->where('date','>',Carbon::now()
            ->subMonth(6))->groupBy("month")->orderBy('date')->pluck('sumpetrol') ;
           $finalFuel = $this->Checkcount($fuel,$month);
            $month = fuelCar::month();

        return view('sections.car.show',compact('finalFuel','month'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(car $car)
    {
        //
    }

    private function Checkcount($count, int $month)
    {
        for ($i = 0 ; $i<$month ; $i ++){
            $new[$i]=empty($count[$i]) ? 0 :$count[$i];
        }
        return array_reverse($new);
    }
}
