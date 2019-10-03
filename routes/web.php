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
use Morilog\Jalali\Jalalian;

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Auth::routes();

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/panel', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {

    Route::get('/Cars', 'CarController@index')->name('cars');
    Route::get('/fuelCar', 'FuelCarController@index')->name('cars');

});
