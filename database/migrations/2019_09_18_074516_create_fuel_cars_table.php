<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuelCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuels', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('fuelTank');
            $table->integer('currentPetrol');
            $table->integer('currentKilo');
            $table->text('paymentFuel');
            $table->text('fuelNote')->nullable();
            $table->text('fuelImage')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('car_id');
            $table->foreign('car_id')->references('id')->on('cars');
            $table->text('date');
            $table->integer('time');
        });
        Schema::create('car_fuel', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
             $table->integer('fuel_id');
             $table->integer('car_id');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fuels');
        Schema::dropIfExists('car_fuel');
    }
}
