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
        'name'      =>'alika',
        'email'     =>'alika@gmail.com',
        'password'  =>Hash::make('12345678'),
        'class'     =>'12',
        'derection' =>'rpl', 
        'gender'    =>'ciwi',
        'point'	    =>'12',

        'name'      =>'yulia',
        'email'     =>'yulia@gmail.com',
        'password'  =>Hash::make('12345678'),
        'class'     =>'12',
        'derection' =>'rpl', 
        'gender'    =>'women',
        'point'	    =>'0',

        'name'      =>'pina',
        'email'     =>'pina@gmail.com',
        'password'  =>Hash::make('12345678'),
        'class'     =>'12',
        'derection' =>'rpl', 
        'gender'    =>'women',
        'point'	    =>'0'

        ]);

     
    }    

}

