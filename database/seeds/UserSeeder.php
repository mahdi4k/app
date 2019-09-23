<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param \Faker\Generator $faker
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
            for ($i=0 ; $i<5 ; $i++){
                DB::table('users')->insert([
                   'name'=>$faker->name,
                   'email'=>$faker->unique()->safeEmail,
                    'password'=>bcrypt('secret'),
                    'remember_token'=>Str::random('16'),
                    'age'=>$faker->randomNumber(2),
                    'gender'=>$faker->randomElement(['male','female']),
                    'created_at'=>\Carbon\Carbon::now(),
                    'updated_at'=>\Carbon\Carbon::now(),
                    'api_token'=>Str::random('60')
                ]);
            }

    }
}
