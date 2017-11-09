<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(EventUserSeeder::class);        
    }
}
