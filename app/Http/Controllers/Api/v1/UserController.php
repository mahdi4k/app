<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Resources\v1\User as UserResource;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $validData = $this->validate($request, [
           'email' => 'required|exists:users',
           'password' => 'required'
        ]);


        // Check Login User
        if(! auth()->attempt($validData)) {
            return response([
                'data' => 'اطلاعات صحیح نیست',
                'status' => 'error'
            ],403);
        }

        return new UserResource(auth()->user());
    }

    public function register(Request $request)
    {
        // Validation Data
        $validData = $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'age' => 'required'
        ],
            ['email.unique'=>'ایمیل وارد شده از قبل ثبت شده است']
            );
        //create new user
        $user = User::create([
            'name' => $validData['name'],
            'email' => $validData['email'],
            'password' => bcrypt($validData['password']),
            'age' =>$validData['age'],
            'api_token'=>Str::random(60)
        ]);

        return new UserResource($user);
    }
}
