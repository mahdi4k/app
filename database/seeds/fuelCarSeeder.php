<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Morilog\Jalali\Jalalian;

class fuelCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param \Faker\Generator $faker
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('fuels')->insert([
                'user_id' => $faker->numberBetween(1, 5),
                'car_id' => $faker->numberBetween(1, 5),
                'fuelTank'=>$faker->randomNumber(2),
                'currentPetrol'=>$faker->randomNumber(2),
                'currentKilo'=>$faker->randomNumber(6),
                'paymentFuel'=>$faker->randomNumber(3),
                'fuelImage'=>$faker->image(),
                'created_at' => $faker->dateTimeBetween( '-6 months','now')

            ]);
        }
    }
}
