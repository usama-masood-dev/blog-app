<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Technology', 'slug' => 'technology'],
            ['name' => 'Travel', 'slug' => 'travel'],
            ['name' => 'Food', 'slug' => 'food'],
            ['name' => 'Lifestyle', 'slug' => 'lifestyle'],
            ['name' => 'Health', 'slug' => 'health'],
            ['name' => 'Education', 'slug' => 'education'],
            ['name' => 'Business', 'slug' => 'business'],
            ['name' => 'Sports', 'slug' => 'sports'],
            ['name' => 'Entertainment', 'slug' => 'entertainment'],
            ['name' => 'Science', 'slug' => 'science'],
        ];

        // Insert categories into the database
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
