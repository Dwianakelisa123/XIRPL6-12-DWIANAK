<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "nama" => "Dwianak Elisa Putridarhi",
        "email" => "putidarhi@gmail.com"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Dwianak Elisa Putridarhi",
        "email" => "putidarhi@gmail.com",
        "gambar" => "putii.JPG"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery',[
        "title" => "Gallery"
    ]);
});