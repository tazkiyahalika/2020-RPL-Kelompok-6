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
        'name'      =>'yuli',
        'email'     =>'yuli@gmail.com',
        'password'  =>'12345678', 
        
        ]);
    }
}
