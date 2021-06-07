<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Guia;
 
class GuiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Factory::create();

        for ($i=0; $i < 30; $i++) { 
            # code...
            Guia::create([
                'name' => $faker->name,
                'title' => $faker->sentence(4),
                'description' => $faker->sentence(),
                'image' => $faker->imageUrl(300, 300, 'cats'),
            ]);
        }
    }
}

