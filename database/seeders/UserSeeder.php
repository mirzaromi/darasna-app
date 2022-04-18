<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);

        User::create([
            'username' => 'muhammadhaikal',
            'password' => bcrypt('muhammadhaikal'),
            'role' => 'author',
            'author_id' => 1,
        ]);

        User::create([
            'username' => 'abdurrohman',
            'password' => bcrypt('abdurrohman'),
            'role' => 'author',
            'author_id' => 2,
        ]);

        User::create([
            'username' => 'amarmaruf',
            'password' => bcrypt('amarmaruf'),
            'role' => 'author',
            'author_id' => 3,
        ]);

        User::create([
            'username' => 'muzammil',
            'password' => bcrypt('muzammil'),
            'role' => 'author',
            'author_id' => 4,
        ]);
    }
}
