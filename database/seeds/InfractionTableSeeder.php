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
    	
    	DB::table('infractions')->insert([
        'name_infraction' =>'black socks', 
        'point'			  =>'10',
        'code'            =>'A1'
        ]);
    	        
    }
}
