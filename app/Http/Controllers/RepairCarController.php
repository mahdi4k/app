<?php

namespace App\Http\Controllers;

use App\car;
use App\repairCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RepairCarController extends Controller
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param repairCar $slug
     * @return repairCar
     */
    public function show(repairCar $slug)
    {
        
        $carId = $slug->car_id;
        $car=car::find($carId);
        $allRepair =repairCar::where('car_id',$car->id)->where('user_id',$this->userId)->get();
        return view('sections.repair.show',compact('car','allRepair'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\repairCar  $repairCar
     * @return \Illuminate\Http\Response
     */
    public function edit(repairCar $repairCar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\repairCar  $repairCar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, repairCar $repairCar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\repairCar  $repairCar
     * @return \Illuminate\Http\Response
     */
    public function destroy(repairCar $repairCar)
    {
        //
    }
}
