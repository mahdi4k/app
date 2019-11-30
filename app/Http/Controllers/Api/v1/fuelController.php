<?php

namespace App\Http\Controllers\Api\v1;

use App\fuelCar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class fuelController extends Controller
{
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fuelTank' => 'required',
            'currentPetrol' => 'required',
            'currentKilo' => 'required',
            'paymentFuel' => 'required',
            'car_id' => 'required',
            'user_id' => 'required'

        ]);
        if ($validator->fails()) {

            return response([
                'data' => [
                    'message' => $validator->errors()
                ],

                'status' => 'error'

            ]);
        }

        $fuel = fuelCar::create([
            'fuelTank' => $request->input('fuelTank'),
            'currentPetrol' => $request->input('currentPetrol'),
            'currentKilo' => $request->input('currentKilo'),
            'paymentFuel' => $request->input('paymentFuel'),
            'car_id' => $request->input('car_id'),
            'user_id' => $request->input('user_id'),
            'updated'
        ]);


    }
}
