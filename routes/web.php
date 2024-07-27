<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function(){
    return view('about', ['name' => 'Khairul Aswad', 'fotoTitle' => 'Go Youn Jung']);
});

Route::get('/blog', function() {
    return view('blog');
});

Route::get('/kontak', function() {
    return view('kontak');
});