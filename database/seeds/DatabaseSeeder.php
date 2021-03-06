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
         $this->call([
             EmployeesSeeder::class,
             PagesSeeder::class,
             PortfoliosSeeder::class,
             ServicesSeeder::class,
         ]);
    }
}
