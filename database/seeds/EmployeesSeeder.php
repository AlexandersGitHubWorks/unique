<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('employees')->insert([
            'name' => $faker->name,
            'position' => 'Chief Executive officer',
            'image' => 'team_pic1.jpg',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        ]);

        DB::table('employees')->insert([
            'name' => 'Kathren Morry',
            'position' => 'Vice President',
            'image' => 'team_pic2.jpg',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        ]);

        DB::table('employees')->insert([
            'name' => 'Lancer Jeck',
            'position' => 'Senior Manager',
            'image' => 'team_pic3.jpg',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        ]);
    }
}
