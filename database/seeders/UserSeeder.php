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
        ]);

        User::create([
            'username' => 'abdurrohman',
            'password' => bcrypt('abdurrohman'),
            'role' => 'author',
        ]);

        User::create([
            'username' => 'amarmaruf',
            'password' => bcrypt('amarmaruf'),
            'role' => 'author',
        ]);

        User::create([
            'username' => 'muzammil',
            'password' => bcrypt('muzammil'),
            'role' => 'author',
        ]);
    }
}
