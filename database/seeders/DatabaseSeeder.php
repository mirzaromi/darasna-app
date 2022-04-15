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

        User::create([
            'username' => 'admin',
            'password' => bcrypt('admin'),
        ]);

        Author::create([
            'nama' => 'Muhammad Haikal',
            'slug' => 'muhammad-haikal'
        ]);
        Author::create([
            'nama' => 'Abdurrohman',
            'slug' => 'abdurrohman'
        ]);
        Author::create([
            'nama' => 'Amar Mar\'uf',
            'slug' => 'Amar-ma\'ruf'
        ]);
        Author::create([
            'nama' => 'Muzammil',
            'slug' => 'muzammil'
        ]);

        Comment::create([
            'isi' => 'ini comment pertama',
            'post_id' => 1,
            'user' => 'jidan'
        ]);

        $this->call([
            PostSeeder::class,
        ]);
    }
}
