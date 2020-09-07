<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        //$this->call(DatabaseSeeder::class);
        $this->call(ClassTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        //$this->call(AdminTableSeeder::class);
        $this->call(InfractionTableSeeder::class);
        

    }
}
