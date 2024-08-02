<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


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
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
