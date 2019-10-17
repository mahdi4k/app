<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->string('slug');
            $table->string('brand');
            $table->string('engineVolume');
            $table->dateTime('yearMake');
            $table->integer('carTag')->nullable();
            $table->integer('chassisNumber');
            $table->text('carsNote')->nullable();
            $table->integer('currentKilo');
            $table->integer('BuckVolume')->nullable();
            $table->integer('percentVolume');
            $table->text('userType');
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
        Schema::dropIfExists('cars');
    }
}
