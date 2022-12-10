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

         User::create([
            'name' => 'ZulhamAbidin',
            'username' => 'pemprogramanwebsite',
            'email' => 'pemprogramanwebsite@gmail.com',
            'password' => bcrypt('pemprogramanwebsite')
        ]);

         User::create([
            'name' => 'ZulhamAbidin',
            'username' => 'astriayuningsih',
            'email' => 'astriayuningsih@gmail.com',
            'password' => bcrypt('astriayuningsih')
        ]);

         User::create([
            'name' => 'ZulhamAbidin',
            'username' => 'zulhamabidin',
            'email' => 'zulhamabidin@gmail.com',
            'password' => bcrypt('astriayuningsih')
        ]);

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

    }
}
