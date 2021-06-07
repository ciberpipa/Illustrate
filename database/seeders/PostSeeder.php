<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\Guia;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create('es_ES'); // create a Spanish faker
        
        $guias = Guia::all();
        
        foreach ($guias as $guia) {

            for ($i = 0; $i < rand(5,10); $i++) {
                Post::create([
                    'name'=> $faker->sentence(),
                    'description'=>$faker->sentence(6),
                    'title' =>  $faker->sentence(),
                    'content' => $faker->text(rand(100, 500)),
                    'user_id' => User::inRandomOrder()->first()->id,
                    'guia_id' => $guia->id,
                    'image' => $faker->imageUrl(300, 300, 'cats'),
                ]);
            }
        }
    }
}
