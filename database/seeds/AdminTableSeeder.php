<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
    	DB::table('admins')->insert([
        'user_id'  =>'1',
        'name'     =>'Alika',
        'gender'   =>'girls',
        'email'    =>'alik@gmail.com',
        'password' =>Hash::make('12345678')

        ]);
    	        
      }

    }


