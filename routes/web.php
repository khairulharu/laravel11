<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['titlePage' => 'Home']);
});

Route::get('/about', function(){
    return view('about', ['titlePage' => 'About']);
});

Route::get('/posts', function() {
    return view('posts', ['titlePage' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Kylian Haru',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quidem placeat eos excepturi vel consequuntur porro, eius velit atque? Excepturi perferendis consequatur at nemo voluptas qui minima rerum id minus!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Kim Haru Eyo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quidem placeat eos excepturi vel consequuntur porro, eius velit atque? Excepturi perferendis consequatur at nemo voluptas qui minima rerum id minus!'
        ],
        [
            'id' => 3,
            'slug' => 'judul-artikel-3',
            'title' => 'Judul Artikel 3',
            'author' => 'Kim Tai Ku',
            'body' => 'Dolor sit amet consectetur adipisicing elit. Facere quidem placeat eos excepturi vel consequuntur porro, eius velit atque? Excepturi perferendis consequatur at nemo voluptas qui minima rerum id minus!'
        ]
    ]]);
});

Route::get('posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Kylian Haru',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quidem placeat eos excepturi vel consequuntur porro, eius velit atque? Excepturi perferendis consequatur at nemo voluptas qui minima rerum id minus!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Kim Haru Eyo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quidem placeat eos excepturi vel consequuntur porro, eius velit atque? Excepturi perferendis consequatur at nemo voluptas qui minima rerum id minus!'
        ],
        [
            'id' => 3,
            'slug' => 'judul-artikel-3',
            'title' => 'Judul Artikel 3',
            'author' => 'Kim Tai Ku',
            'body' => 'Dolor sit amet consectetur adipisicing elit. Facere quidem placeat eos excepturi vel consequuntur porro, eius velit atque? Excepturi perferendis consequatur at nemo voluptas qui minima rerum id minus!'
        ]
        ];

        $post = Arr::first($posts, function($post) use ($slug) {
          return $post['slug'] === $slug;
        });

        return view('post', ['titlePage' => 'Single Post', 'post' => $post]);
});

Route::get('/kontak', function() {
    return view('kontak', ['titlePage' => 'Kontak']);
});