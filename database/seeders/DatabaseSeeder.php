<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //Memanggiil Class Seeder Di file DatabaseSeeder
        $this->call([CategorySeeder::class, UserSeeder::class]);

        
        //Memasukkan Ke Dalam recycle agar bisa membuat User dan category sesuai dengan yang kita inginkan
        Post::factory(5)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
