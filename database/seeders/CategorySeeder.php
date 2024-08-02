<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Computer Science',
            'slug' => 'computer-science'
        ]);

        Category::create([
            'name' => 'Agriculture',
            'slug' => 'agriculture'
        ]);

        Category::create([
            'name' => 'Tech Design',
            'slug' => 'tech-design'
        ]);

        Category::create([
            'name' => 'Opto Brick',
            'slug' => 'opto-brick'
        ]);
    }
}
