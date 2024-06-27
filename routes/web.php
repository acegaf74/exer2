<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Multi-Blog Projects']);
});

Route::get('/blog', function(){
    return view('blog', ['title' => 'Blog']);
});