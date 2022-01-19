<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Dwianak Elisa Putridarhi",
        "email" => "putidarhi@gmail.com",
        "gambar" => ""
    ]);
});

Route::get('/gallery', function () {
    return view('gallery');
});


