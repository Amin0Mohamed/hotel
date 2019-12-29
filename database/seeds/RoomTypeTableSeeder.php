<?php

use Illuminate\Database\Seeder;
use App\Models\RoomType;

class RoomTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $g1 =RoomType::create([
            'type_name'=>'single',
            'description'=>'single room',
        ])->save();
        $g2 =RoomType::create([
            'type_name'=>'double',
            'description'=>'double room',
        ])->save();
        $g3 =RoomType::create([
            'type_name'=>'triple',
            'description'=>'triple room',
        ])->save();
        $g4 =RoomType::create([
            'type_name'=>'quarto',
            'description'=>'quarto room',
        ])->save();

    }
}
