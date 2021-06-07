<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Image;
use App\Models\Topic;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $topics = Topic::all();

        foreach ($topics as $topic){

                for ($i=0; $i < 20; $i++) { 
                # code...
                Image::create([
                   
                    'author' => $faker->name,
                    'topic_id'=> $topic->id,
                    'name' => $faker->name,
                    'description' => $faker->sentence(),
                    'image' => $faker->imageUrl(300, 300, 'image'.$i),
                ]);
            }

        }

        
    }
}
