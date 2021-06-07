<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Guia;
use App\Models\Topic;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            GuiaSeeder::class,
            UserSeeder::class,
            PostSeeder::class,
            
            CommentSeeder::class,
            TopicSeeder::class,
            ImageSeeder::class,
        ]);
    }
}
