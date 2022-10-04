<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
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

        // User::create([
        //     'name' => 'admin123',
        //     'username' => 'admin123',
        //     'email' => 'username@gmail.com',
        //     'password' => bcrypt('password')
        // ]);

         User::create([
            'name' => 'ZulhamAbidin',
            'username' => 'pemprogramanwebsite',
            'email' => 'pemprogramanwebsite@gmail.com',
            'password' => bcrypt('pemprogramanwebsite')
        ]);

        //  User::create([
        //     'name' => 'Zulham Abidin',
        //     'username' => 'zulhamabidin',
        //     'email' => 'zlhm378@gmail.com',
        //     'password' => bcrypt('zulhamabidin')
        // ]);

        // User::factory(5)->create();

        Category::create([
            "name" => "FAKULTAS TEKNIK",
            "slug" => "FAKULTAS TEKNIK"
        ]);

        Category::create([
            "name" => "FAKULTAS SENI",
            "slug" => "FAKULTAS SENI"
        ]);

        Category::create([
            "name" => "FAKULTAS MIPA",
            "slug" => "FAKULTAS MIPA"
        ]);

        Blog::factory(1)->create();
    }
}
