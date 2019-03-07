<?php

use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'name' => 'Home',
            'alias' => 'home',
            'text' => '<h2>We create <strong>awesome</strong> web templates</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>',
            'image' => 'main_device_image.jpg',
        ]);

        DB::table('pages')->insert([
            'name' => 'About Us',
            'alias' => 'about-us',
            'text' => '<h3>About us ipsum dolor sit amet, consectetur adipiscing elit</h3><br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            'image' => 'about-img.jpg',
        ]);
    }
}
