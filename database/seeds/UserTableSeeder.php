<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'name'      =>'rika',
        'email'     =>'rika@gmail.com',
        'password'  =>Hash::make('12345678'), 

        'name'      =>'aa',
        'email'     =>'aa@gmail.com',
        'password'  =>Hash::make('12345678'),

        'name'      =>'sss',
        'email'     =>'sss@gmail.com',
        'password'  =>Hash::make('12345678'),  
        
        ]);
    }
}
