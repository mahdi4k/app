<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\car;
use App\fuelCar;

Route::middleware('guest')->group(function () {

    Route::get('/', function () {

        return view('welcome');

    });
});
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Auth::routes();

Route::get('logout', 'Auth\LoginController@logout')->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/panel', 'HomeController@index')->name('home');

    Route::resource('Cars', 'CarController');
    Route::get('/fuelCar', 'FuelCarController@index')->name('cars');


});
Route::get('/qwer',function (){
$fuelCar =fuelCar::find('3');
return $fuelCar->car;
});

Route::get('/asd',function(){
     $fuelCar =car::with('fuelCars')->where('user_id',auth()->user()->id)->get();

    dd($fuelCar);
         foreach ($fuelCar  as $key=>$value){

             dump($value->fuelCars[$key]['date']);

         }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
