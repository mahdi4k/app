<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class repairCarSeeder extends Seeder
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
            $namOfCar = \App\repairCar::find(rand(6,10));
            DB::table('repair_cars')->insert([
                'user_id' => $faker->numberBetween(1, 5),
                'car_id' => $faker->numberBetween(1, 5),
                'currentKilo'=>$faker->randomNumber(5),
                'repairPlace'=>$faker->userName,
                'typeRepair'=>$faker->userName,
                'created_at'=>$faker->date(),
                'slug' => $namOfCar->car->name
             ]);
        }
    }
}
