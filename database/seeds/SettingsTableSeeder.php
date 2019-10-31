<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('settings')->insert([
            ['name' => 'system_name', 'value' => 'The PHP Framework for Web Artisans'],
            ['name' => 'favicon', 'value' => 'https://laravel.com/img/favicon/apple-touch-icon.png'],
            ['name' => 'front_logo', 'value' => 'https://laravel.com/img/logotype.min.svg'],
            ['name' => 'admin_logo', 'value' => 'https://laravel.com/img/logotype.min.svg'],
        ]);
    }
}
