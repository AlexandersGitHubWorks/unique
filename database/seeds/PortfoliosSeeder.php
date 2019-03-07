<?php

use Illuminate\Database\Seeder;

class PortfoliosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            'name' => 'Finance App',
            'image' => 'portfolio_pic1.jpg',
            'filter' => 'GPS',
        ]);

        DB::table('portfolios')->insert([
            'name' => 'Concept',
            'image' => 'portfolio_pic2.jpg',
            'filter' => 'Design',
        ]);

        DB::table('portfolios')->insert([
            'name' => 'Shopping',
            'image' => 'portfolio_pic3.jpg',
            'filter' => 'Android',
        ]);

        DB::table('portfolios')->insert([
            'name' => 'Management',
            'image' => 'portfolio_pic4.jpg',
            'filter' => 'Design',
        ]);

        DB::table('portfolios')->insert([
            'name' => 'Iphone',
            'image' => 'portfolio_pic5.jpg',
            'filter' => 'Web',
        ]);

        DB::table('portfolios')->insert([
            'name' => 'Nexus',
            'image' => 'portfolio_pic6.jpg',
            'filter' => 'Web',
        ]);

        DB::table('portfolios')->insert([
            'name' => 'Android',
            'image' => 'portfolio_pic7.jpg',
            'filter' => 'Android',
        ]);
    }
}
