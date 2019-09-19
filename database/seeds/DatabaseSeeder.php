<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CarSeeder::class);
        $this->call(CarServiceSeeder::class);
        $this->call(otherCostsSeeder::class);
        $this->call(fuelCarSeeder::class);
        $this->call(repairCarSeeder::class);
    }
}
