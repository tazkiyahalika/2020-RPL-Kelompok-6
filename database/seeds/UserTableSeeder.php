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
        'role_id'   =>'1',
        'name'      =>'alik',
        'email'     =>'alik@gmail.com',
        'password'  =>Hash::make('12345678')

        ]);
    }
}
