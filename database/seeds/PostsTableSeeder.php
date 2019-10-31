<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
        $faker = \Faker\Factory::create();

        $data = [];

        for ($i=1; $i <= 33; $i++) { 
            $data[] = [
                'title' => $faker->sentence(3),
                'short_description' => $faker->sentence(5),
                'description' => $faker->sentence(10),
                'slug' => $faker->word,
                'category_id' => mt_rand(1, 2),
                'created_by' => 1,
                'main_image' => 'post/post_main_'.$i.'.jpg',
                'thumb_image' => 'post/post_thumb_'.$i.'.jpg',
                'list_image' => 'post/post_list_'.$i.'.jpg',
                'view_count' => mt_rand(0, 30),
                'hot_news' => mt_rand(0, 1),
                'status' => 1,
            ];
        }

        \DB::table('posts')->insert($data);
    }
}
