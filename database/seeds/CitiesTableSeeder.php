<?php

use Illuminate\Database\Seeder;
use App\Models\City;

class CitiesTableSeeder extends Seeder
{

    public function run()
    {
        $c1 =City::create([
            'name'=>'Daraw',
            'country_id'=>1,
        ])->save();
        $c2 =City::create([
            'name'=>'Kawm Umbu',
            'country_id'=>1,
        ])->save();
        $c3 =City::create([
            'name'=>'an-Nasir',
            'country_id'=>1,
        ])->save();
        $c4 =City::create([
            'name'=>'Abnub',
            'country_id'=>2,
        ])->save();
        $c5 =City::create([
            'name'=>'Abu Tij',
            'country_id'=>2,
        ])->save();
        $c6 =City::create([
            'name'=>'Asyut',
            'country_id'=>2,
        ])->save();
        $c7 =City::create([
            'name'=>'Bani Muhammadiyat',
            'country_id'=>2,
        ])->save();
        $c8 =City::create([
            'name'=>'Dayrut',
            'country_id'=>2,
        ])->save();
        $c9 =City::create([
            'name'=>'Dayrut-ash-Sharif',
            'country_id'=>2,
        ])->save();
        $c10 =City::create([
            'name'=>'Manfalut',
            'country_id'=>2,
        ])->save();

        $c11 =City::create([
            'name'=>'6th of October City',
            'country_id'=>3,
        ])->save();
        $c12 =City::create([
            'name'=>'Ataba',
            'country_id'=>3,
        ])->save();
        $c13 =City::create([
            'name'=>'Nasr City',
            'country_id'=>3,
        ])->save();
        $c14 =City::create([
            'name'=>'Obour City',
            'country_id'=>3,
        ])->save();
        $c15 =City::create([
            'name'=>'Elsadat',
            'country_id'=>3,
        ])->save();
        $c16 =City::create([
            'name'=>'Izbat-al-Burj',
            'country_id'=>4,
        ])->save();
        $c17 =City::create([
            'name'=>'Damietta',
            'country_id'=>4,
        ])->save();
        $c18 =City::create([
            'name'=>'Dumyat',
            'country_id'=>4,
        ])->save();
        $c19 =City::create([
            'name'=>'El-Zarka',
            'country_id'=>4,
        ])->save();
        $c20 =City::create([
            'name'=>'Faraskur',
            'country_id'=>4,
        ])->save();
        $c22 =City::create([
            'name'=>'Kafr Saad',
            'country_id'=>4,
        ])->save();

        $c23 =City::create([
            'name'=>'Biyala',
            'country_id'=>5,
        ])->save();
        $c24 =City::create([
            'name'=>'Disuq',
            'country_id'=>5,
        ])->save();
        $c25 =City::create([
            'name'=>'Fuwah',
            'country_id'=>5,
        ])->save();
        $c26 =City::create([
            'name'=>'Kafr-al-Jaraeidah',
            'country_id'=>5,
        ])->save();
        $c27 =City::create([
            'name'=>'Kafr-ash-Shaykh',
            'country_id'=>5,
        ])->save();
        $c28 =City::create([
            'name'=>'Mutubis',
            'country_id'=>5,
        ])->save();
        $c29 =City::create([
            'name'=>'Qallin',
            'country_id'=>5,
        ])->save();
        $c30 =City::create([
            'name'=>'Sidi Salim',
            'country_id'=>5,
        ])->save();
        $c31 =City::create([
            'name'=>'Marsa Matruh',
            'country_id'=>6,
        ])->save();
        $c32 =City::create([
            'name'=>'Nasr',
            'country_id'=>6,
        ])->save();
        $c33 =City::create([
            'name'=>'Sidi Barrani',
            'country_id'=>6,
        ])->save();
        $c34 =City::create([
            'name'=>'Zawiyat Shammas',
            'country_id'=>6,
        ])->save();
        $c35 =City::create([
            'name'=>'Armant',
            'country_id'=>7,
        ])->save();
        $c36 =City::create([
            'name'=>'Dandarah',
            'country_id'=>7,
        ])->save();
        $c37 =City::create([
            'name'=>'Dishna',
            'country_id'=>7,
        ])->save();
        $c38 =City::create([
            'name'=>'Farshut',
            'country_id'=>7,
        ])->save();
        $c39 =City::create([
            'name'=>'Hijazah',
            'country_id'=>7,
        ])->save();
        $c40 =City::create([
            'name'=>'FHiwarshut',
            'country_id'=>7,
        ])->save();

        $c400 =City::create([
            'name'=>'Akhmim',
            'country_id'=>8,
        ])->save();
        $c41 =City::create([
            'name'=>'Awlad Tawq Sharq',
            'country_id'=>8,
        ])->save();
        $c42 =City::create([
            'name'=>'Dar-as-Salam',
            'country_id'=>8,
        ])->save();
        $c43 =City::create([
            'name'=>'Jirja',
            'country_id'=>8,
        ])->save();

        $c44 =City::create([
            'name'=>'Aja',
            'country_id'=>9,
        ])->save();
        $c45 =City::create([
            'name'=>'Bahut',
            'country_id'=>9,
        ])->save();
        $c46 =City::create([
            'name'=>'Bilqas',
            'country_id'=>9,
        ])->save();
        $c47 =City::create([
            'name'=>'Dikirnis',
            'country_id'=>9,
        ])->save();

        $c48 =City::create([
            'name'=>'Minyat-an-Nasr',
            'country_id'=>9,
        ])->save();

        $c49 =City::create([
            'name'=>'Ashmun',
            'country_id'=>10,
        ])->save();
        $c50 =City::create([
            'name'=>'Birkat-as-Sab',
            'country_id'=>10,
        ])->save();
        $c51 =City::create([
            'name'=>'Milij',
            'country_id'=>10,
        ])->save();
        $c52 =City::create([
            'name'=>'Minuf',
            'country_id'=>10,
        ])->save();
        $c53 =City::create([
            'name'=>'Quwaysina',
            'country_id'=>10,
        ])->save();
        $c54 =City::create([
            'name'=>'Shibin-al-Kawm',
            'country_id'=>10,
        ])->save();
        $c55 =City::create([
            'name'=>'Sirs-al-Layyanah',
            'country_id'=>10,
        ])->save();


    }
}
