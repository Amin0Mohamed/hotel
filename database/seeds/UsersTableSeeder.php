<?php

use Illuminate\Database\Seeder;
use \App\Models\User;
use \Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
             'name'=>'amin mohamed',
             'email'=>'amin@amin.com',
             'password'=>bcrypt('55555'),
             'image'=>'15.jpg',
        ]);

        $user->save();
    }
}
