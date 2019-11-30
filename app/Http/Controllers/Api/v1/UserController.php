<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Resources\v1\User as UserResource;
use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller

    /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="L5 OpenApi",
     *      description="L5 Swagger OpenApi description"
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/api/v1/ ",
     *     description="Home page",
     *     @OA\Response(response="default", description="Welcome page")
     * )
     */

{
    public function login(Request $request)
    {

        // Validation Data
        $validData = Validator::make($request->all(), [
            'email' => 'required|exists:users',
            'password' => 'required|confirmed'
        ]);
        if ($validData->fails()){
            $failedRules = $validData->failed();
            if(isset($failedRules['email']['required'])) {
                return response()->json([
                    'errors' => 'لطفا ایمیل خود را وارد کنید',
                    'status' =>'12'
                ]);
            }
            return response()->json([
                'errors' => $validData->errors(),
                'status' =>'12'
            ]);
        }

        // Check Login User
        if (!auth()->attempt($validData->validate())) {
            return response([
                'errors' => $validData->errors(),
                'status' => '13'
            ], 403);
        }

        return new UserResource(auth()->user());
    }

    public function register(Request $request)
    {
        // Validation Data
        $validData = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'age' => 'required'
        ],
            ['email.unique' => 'ایمیل وارد شده از قبل ثبت شده است']
        );

        if ($validData->fails()) {
            return response()->json([
                'errors'=>$validData->errors(),
                'status'=>2
            ] );
        }else{
         $user =   User::create([
                'name' =>  $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'age' => $request->input('age'),
                'api_token' => Str::random(60)
            ]);
            return new UserResource($user);
        }


        //create new user


    }

}
