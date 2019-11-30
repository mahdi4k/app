<?php

namespace App\Http\Controllers;

use App\car;
use App\fuelCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Morilog\Jalali\Jalalian;

class FuelCarController extends Controller
{
    protected $userId;

    public function __construct()
    {
        $this->middleware(function (Request $request, $next) {
            if (!Auth::check()) {
                return view('welcome');

            }
            $this->userId = Auth::id();
            return $next($request);

        });

    }

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\fuelCar $fuelCar
     * @return \Illuminate\Http\Response
     */
    public function show(fuelCar $fuelCar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\fuelCar $fuelCar
     * @return \Illuminate\Http\Response
     */
    public function edit(fuelCar $fuelCar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\fuelCar $fuelCar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fuelCar $fuelCar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\fuelCar $fuelCar
     * @return \Illuminate\Http\Response
     */
    public function destroy(fuelCar $fuelCar)
    {
        //
    }
}
