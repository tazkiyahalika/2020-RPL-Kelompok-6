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
        'class'     =>'12',
        'derection' =>'rpl', 
        'gender'    =>'ciwi',
        'point'	    =>'12',

        ]);
    	        
    }    

}

