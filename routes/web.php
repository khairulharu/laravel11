<?php

use App\Models\Post;
use App\Models\User;
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

Route::get('/authors/{user}', function (User $user){
    return view('posts', ['titlePage' => 'Article By '. $user->name, 'posts' => $user->posts]);
});