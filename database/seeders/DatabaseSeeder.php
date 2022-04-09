<?php

namespace Database\Seeders;

use App\Models\Author;
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
            'nama' => 'Zinedine Zidane',
            'slug' => 'zinedine-zidane'
        ]);

        $this->call([
            PostSeeder::class,
        ]);
    }
}
