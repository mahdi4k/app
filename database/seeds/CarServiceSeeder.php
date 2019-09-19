<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param \Faker\Generator $faker
     * @return void
     */
    public function run(\Faker\Generator $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('car_services')->insert([
                'user_id' => $faker->numberBetween(1, 5),
                'KiloWorked'=>$faker->randomNumber('6'),
                'serviceType'=>$faker->name,
                'serviceImage'=>$faker->image(),
                'totalPrice'=>$faker->randomNumber('5'),
                'car_id'=>$faker->numberBetween(1, 5),
                 ]);
        }
    }
}
