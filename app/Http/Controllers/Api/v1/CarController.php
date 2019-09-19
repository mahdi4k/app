<?php

namespace App\Http\Controllers\Api\v1;

use App\car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function index(){

        $Cars = car::all();
        return response()->json($Cars);

    }
}
