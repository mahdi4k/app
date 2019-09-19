<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_costs', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('currentKilo');
            $table->text('typePrice');
            $table->text('seller');
            $table->integer('totalPrice');
            $table->text('note')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('car_id');//car_id
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
        Schema::dropIfExists('other_costs');
    }
}
