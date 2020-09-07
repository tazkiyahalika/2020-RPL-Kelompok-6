<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
        'name_class' =>'XI',
        'direction' =>'Rekayasa Perangkat Lunak'
        ]);

    }
}
