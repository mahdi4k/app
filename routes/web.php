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
    Route::get('fuel/{name}', 'CarController@show')->name('car.show');
    Route::get('repair/{slug}', 'RepairCarController@show')->name('repair.show');

 });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



/*Route::get('/qwer',function (){
    $fuelCar =fuelCar::find('30');
    return $fuelCar ;
});

Route::get('/asd',function(){
    $fuelCar =car::with('fuelCars')->where('user_id',auth()->user()->id)->get();

    dd($fuelCar);
    foreach ($fuelCar  as $key=>$value){

        dump($value->fuelCars[$key]['date']);

    }
});*/

/*Route::get('/qwer',function (){
  \App\repairCar::create([
        'id'=>'11',
      'currentKilo'=>123,
      'repairPlace'=>'qwer',
        'typeRepair'=>'idk',
        'user_id'=>'5',
         'car_id' =>'2',
         'slug'=>car::whereId('car_id')->get('name')
  ]);
    $post = \App\repairCar::find(80);

    return $post->car->name;
    $comment = $post->repair()->create([
        'currentKilo'=>123,
        'repairPlace'=>'qwer',
        'typeRepair'=>'idk',
        'user_id'=>'5',
        'car_id' =>'2',
        'slug'=>$post->name,
        'message' => 'A new comment.',
    ]);
});*/
