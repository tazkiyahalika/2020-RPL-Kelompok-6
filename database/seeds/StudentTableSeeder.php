<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	DB::table('students')->insert([
        'user_id'   =>'1',
        'name'      =>'pina',
        'class'     =>'12',
        'direction' =>'rpl', 
        'gender'    =>'women',
        'point'	    =>'0',
        'email'     =>'pina@gmail.com',
        'password'  =>Hash::make('12345678')

        ]);

     
    }    

}

