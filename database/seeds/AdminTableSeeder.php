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
        'name'     =>'Ana',
        'gender'   =>'girls',
        'email'    =>'ana@gmail.com',
        'password' =>Hash::make('12345678')

        ]);
    	        
      }

    }


