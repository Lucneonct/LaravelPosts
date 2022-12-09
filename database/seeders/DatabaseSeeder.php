<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{User, Category, Course, Post};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create();        
        Category::factory()->count(10)->create();
        Course::factory()->count(10)->create();
        Post::factory()->count(10)->create();
    }
}
