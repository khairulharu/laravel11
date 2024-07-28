<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['titlePage' => 'Home']);
});

Route::get('/about', function(){
    return view('about', ['titlePage' => 'About']);
});

Route::get('/blog', function() {
    return view('blog', ['titlePage' => 'Blog']);
});

Route::get('/kontak', function() {
    return view('kontak', ['titlePage' => 'Kontak']);
});