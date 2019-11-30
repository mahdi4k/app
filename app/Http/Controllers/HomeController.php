<?php

namespace App\Http\Controllers;

use App\car;
use App\fuelCar;
use App\repairCar;
use Illuminate\Http\Request;

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

        $carName = car::with('repair')->where('user_id', auth()->user()->id)->get(['id','name','slug']);

        $date_list =fuelCar::month();
        return view('home', compact('date_list', 'carName'));
    }
}
