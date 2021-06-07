<?php
namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Guia;
use App\Models\Comment;

class CommentSeeder extends Seeder
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
        
        $posts = Guia::all();
        
        $users = User::inRandomOrder()->limit(rand(3, 7))->get();
        
        foreach ($posts as $post) {
            

            foreach ($users as $user) {
                Comment::create([
                    'comment' => $faker->sentence(rand(6, 20)),
                    'guia_id' => $post->id,
                    'user_id' => $user->id
                ]);
            }
        }
    }
}
