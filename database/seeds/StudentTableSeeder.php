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
        

    		DB::table('student')->insert([
        	'name'    => Str::make('alika'),
        	'class'   => Int::make('12'),
        	'derection' => Str::make('rpl') 
        	'gender'  => Str::make('ciwi'),
        	'point'	  => Int::make('12'),
        ]);
    	        
    }    }
}
