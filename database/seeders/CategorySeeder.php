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
            'slug' => 'web-design',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'Computer Science',
            'slug' => 'computer-science',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'Agriculture',
            'slug' => 'agriculture',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'Tech Design',
            'slug' => 'tech-design',
            'color' => 'yellow'
        ]);
    }
}
