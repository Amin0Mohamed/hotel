<?php

use Illuminate\Database\Seeder;
use \App\Models\Country;

class CountryTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $g1 =Country::create([
            'name'=>'Aswan',
        ])->save();
        $g2 =Country::create([
            'name'=>'Asyut',
        ])->save();

        $g11 =Country::create([
            'name'=>'Cairo',
        ])->save();

        $g10 =Country::create([
            'name'=>'Dumyat',
        ])->save();

        $g9 =Country::create([
            'name'=>'Kafr-ash-Shaykh',
        ])->save();

        $g8 =Country::create([
            'name'=>'Matruh',
        ])->save();
        $g7 =Country::create([
            'name'=>'Qina',
        ])->save();

        $g6 =Country::create([
            'name'=>'Sawhaj',
        ])->save();

        $g5 =Country::create([
            'name'=>'ad-Daqahliyah',
        ])->save();
        $g4 =Country::create([
            'name'=>'al-Minufiyah',
        ])->save();

    }
}
