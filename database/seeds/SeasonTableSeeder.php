<?php

use Illuminate\Database\Seeder;

class SeasonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $g1 =\App\Models\Season::create([
            'season_type'=>'low season',
            'season_price'=>30,
            'hotel_id'=>1
        ])->save();
        $g=\App\Models\Season::create([
            'season_type'=>'hight season',
            'season_price'=>60,
            'hotel_id'=>1
        ])->save();
    }
}
