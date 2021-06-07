<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Topic;
use App\Models\Guia;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i < 10; $i++) { 
            # code...
            Topic::create([
                'name' => $faker->name,
                'description' => $faker->sentence(),
                'image' => $faker->imageUrl(300, 300, 'topic'.$i),
            ]);
        }
    }
}
