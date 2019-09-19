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
        Schema::create('fuel_cars', function (Blueprint $table) {
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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fuel_cars');
    }
}
