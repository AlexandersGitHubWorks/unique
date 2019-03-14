<?php

use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    public $text = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => 'Android',
            'text' => $this->text,
            'icon' => 'fa-android',
        ]);

        DB::table('services')->insert([
            'name' => 'Apple Ios',
            'text' => $this->text,
            'icon' => 'fa-apple',
        ]);

        DB::table('services')->insert([
            'name' => 'Design',
            'text' => $this->text,
            'icon' => 'fa-dropbox',
        ]);

        DB::table('services')->insert([
            'name' => 'Concept',
            'text' => $this->text,
            'icon' => 'fa-html5',
        ]);

        DB::table('services')->insert([
            'name' => 'User Research',
            'text' => $this->text,
            'icon' => 'fa-slack',
        ]);

        DB::table('services')->insert([
            'name' => 'User Experience',
            'text' => $this->text,
            'icon' => 'fa-users',
        ]);
    }
}
