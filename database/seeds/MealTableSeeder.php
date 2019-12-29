<?php

use Illuminate\Database\Seeder;
use App\Models\Meal;

class MealTableSeeder extends Seeder
{

    public function run()
    {
        $m1 =Meal::create([
            'meal_type'=>'BO',
            'price'=>20,
            'hotel_id'=>1,
        ])->save();
        $m2 =Meal::create([
            'meal_type'=>'HB',
            'price'=>50,
            'hotel_id'=>1,
        ])->save();
        $m3 =Meal::create([
            'meal_type'=>'BB',
            'price'=>60,
            'hotel_id'=>1,
        ])->save();


    }
}
