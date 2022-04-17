<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

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



        Comment::create([
            'isi' => 'ini comment pertama',
            'post_id' => 1,
            'user' => 'jidan'
        ]);

        $this->call([
            PostSeeder::class,
            UserSeeder::class,
            AuthorSeeder::class,
        ]);
    }
}
