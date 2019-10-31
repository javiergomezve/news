<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create([
            'name' => 'Social',
            'status' => 1,
        ]);

        \App\Category::create([
            'name' => 'News',
            'status' => 1,
        ]);
    }
}
