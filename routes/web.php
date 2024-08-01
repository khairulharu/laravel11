<?php

use App\Models\Category;
use App\Models\Char;
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

Route::get('/authors/{user:username}', function (User $user){
    return view('posts', ['titlePage' => count($user->posts) . ' Article By '. $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category){
    return view('posts', ['titlePage' => 'Articles in : '. $category->name, 'posts' => $category->posts]);
});

Route::get('/chars/{char}', function (Char $char){
    return view('posts', ['titlePage' =>' Char By '. $char->slug, 'posts' => $char->posts]);
});