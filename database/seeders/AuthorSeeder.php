<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
