<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['titlePage' => 'Home']);
});

Route::get('/about', function(){
    return view('about', ['titlePage' => 'About']);
});

Route::get('/posts', function() {
    return view('posts', ['titlePage' => 'Blog', 'posts' => Post::all()]);
});

Route::get('posts/{post:slug}', function(Post $post){

        return view('post', ['titlePage' => 'Single Post', 'post' => $post]);      
});

Route::get('/kontak', function() {
    return view('kontak', ['titlePage' => 'Kontak']);
});