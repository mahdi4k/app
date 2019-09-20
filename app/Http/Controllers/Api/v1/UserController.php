<?php

namespace App\Http\Controllers\Api\v1;

use App\User;
use \App\Http\Resources\v1\User as UserResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     public function login(Request $request)
    {

       $validData = $this->validate($request,[
            'email' => 'required|exists:users',
            'password' => 'required'
        ]);



        if (! auth()->attempt($validData)){
             return response([
                'data' =>'اطلاعات صحیح نیست',
                 'status' => 'error'
             ],403);
            }

        return new UserResource(auth()->user());

     }

    public function register(Request $request)
    {
        $validData = $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'age'=>['required']

        ]);

       $user = User::create([
            'name' => $validData['name'],
            'email' => $validData['email'],
            'password' => Hash::make($validData['password']),
            'age' =>$validData['age']

        ]);

        return new UserResource($user);
    }
}
