<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
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
            DB::table('cars')->insert([
                'user_id' => $faker->numberBetween(1, 5),
                'name' => $faker->name,
                'slug' => $faker->slug,
                'brand' => $faker->name,
                'engineVolume' => $faker->randomNumber('5'),
                'yearMake' => $faker->dateTime,
                'carTag' => $faker->randomNumber('6'),
                'chassisNumber' => $faker->randomNumber('7'),
                'carsNote' => $faker->sentence,
                'currentKilo' => $faker->randomNumber('8'),
                'BuckVolume' => $faker->randomNumber('4'),
                'percentVolume' => $faker->randomNumber('2'),
                'userType' => $faker->randomElement(['taxi', 'normal']),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
