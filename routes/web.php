<?php

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
            'title' => 'Judul Artikel 1',
            'author' => 'Kylian Haru',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quidem placeat eos excepturi vel consequuntur porro, eius velit atque? Excepturi perferendis consequatur at nemo voluptas qui minima rerum id minus!'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'Kim Haru Eyo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quidem placeat eos excepturi vel consequuntur porro, eius velit atque? Excepturi perferendis consequatur at nemo voluptas qui minima rerum id minus!'
        ],
        [
            'id' => 3,
            'title' => 'Judul Artikel 3',
            'author' => 'Kim Tai Ku',
            'body' => 'Dolor sit amet consectetur adipisicing elit. Facere quidem placeat eos excepturi vel consequuntur porro, eius velit atque? Excepturi perferendis consequatur at nemo voluptas qui minima rerum id minus!'
        ]
    ]]);
});

Route::get('/kontak', function() {
    return view('kontak', ['titlePage' => 'Kontak']);
});