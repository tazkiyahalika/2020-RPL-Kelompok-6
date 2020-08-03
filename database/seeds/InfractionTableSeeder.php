<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class InfractionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	

    		DB::table('infraction')->insert([
        	'name_infraction' => Str::random(10), 
        	'point'			  => Int::random(10),

        ]);
    	        
    }
}
}