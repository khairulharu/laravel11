<?php

use App\Models\Category;
use App\Models\Char;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::latest()->get();
    
    return view('home', ['titlePage' => 'Home', 'posts' => $posts]);
});

Route::get('/about', function(){
    return view('about', ['titlePage' => 'About']);
});

Route::get('/posts', function() {
    //howto use with eager loading to fast query
    // $posts = Post::with(['author', 'category'])->latest()->get();

    $posts = Post::latest()->get();

    return view('posts', ['titlePage' => 'Blog', 'posts' => $posts]);
});

Route::get('posts/{post:slug}', function(Post $post){

        return view('post', ['titlePage' => 'Single Post', 'post' => $post]);      
});

Route::get('/kontak', function() {
    return view('kontak', ['titlePage' => 'Kontak']);
});

Route::get('/authors/{user:username}', function (User $user){
     //howto use with eager loading to fast query
    // $posts = $user->posts->load(['category', 'author']);

    return view('posts', ['titlePage' => count($user->posts) . ' Article By '. $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category){
     //howto use with eager loading to fast query
    // $posts = $category->posts->load(['author', 'category']);

    return view('posts', ['titlePage' => 'Articles in : '. $category->name, 'posts' => $category->posts]);
});