<?php

use Illuminate\Database\Seeder;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Hotel::create([
            'title'=>'Cairo hotel',
            'address'=>'giza',
            'description'=>'hotel description',
            'phone'=>'0100239547',
            'name'=>'fdfg',
            'mobile'=>'2468475',
            'email'=>'amin@amin.com',
            'lattitude'=>'30.1278',
            'longitude'=>'30.11455',
            'rating'=>'3',
            'rate_count'=>'3',
            'city_id'=>'1',
        ])->save();
    }
}
