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
         $this->call(UsersTableSeeder::class);
        $this->call(CountryTableSeed::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(HotelTableSeeder::class);
        $this->call(MealTableSeeder::class);
        $this->call(RoomTypeTableSeeder::class);
        $this->call(SeasonTableSeeder::class);
    }
}
