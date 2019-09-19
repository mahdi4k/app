<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class otherCostsSeeder extends Seeder
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
            DB::table('other_costs')->insert([
                'user_id' => $faker->numberBetween(1, 5),
                'car_id' => $faker->numberBetween(1, 5),
                'currentKilo' => $faker->randomNumber('8'),
                'typePrice'=>$faker->name,
                'seller'=>$faker->name,
                'totalPrice'=>$faker->randomNumber(2),

            ]);
        }
    }
}
