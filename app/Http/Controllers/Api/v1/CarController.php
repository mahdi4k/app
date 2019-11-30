<?php

namespace App\Http\Controllers\Api\v1;

use App\car;
use App\Http\Resources\v1\Cars;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    public function index(){

        $Cars = car::all();
        return   Cars::collection($Cars);

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
           'name' => 'required',
            'brand' => 'required',
            'engineVolume' => 'required',
            'yearMake' => 'required',
            'carTag' => 'required',
            'percentVolume' => 'required',
            'userType' => 'required',
            'chassisNumber' => 'required',
            'currentKilo' => 'required'

        ]);

        if ($validator->fails()){

            return response([
                'data'=>[
               'message' => $validator->errors()
            ],

                'status' => 'error'

               ]);
        }
        auth()->user()->getCars()->create([
            'name' =>  $request->input('name'),
            'brand' => $request->input('brand'),
            'engineVolume' => $request->input('engineVolume'),
            'currentKilo' => $request->input('currentKilo'),
            'yearMake'=>$request->input('yearMake'),
            'carTag'=>$request->input('carTag'),
            'percentVolume'=>$request->input('percentVolume'),
            'userType'=>$request->input('userType'),
            'chassisNumber'=>$request->input('chassisNumber')
        ]);
        return response([
           'data' =>[
               'message' => 'اطلاعات خودرو شما با موفقیت ثبت گردید'
           ],'status' =>'success'
        ]);
    }
}
