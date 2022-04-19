<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', [
        "title" => "Home"
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
route::get('contact/create', [ContactController::class, 'create'])->name('contact.create');
route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');


Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    route::get('contact/index', [ContactController::class, 'index'])->name('contact.index');
    route::get('contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    route::post('contact/{id}/update', [ContactController::class, 'update'])->name('contact.update');
    route::get('contact/{id}/destroy', [ContactController::class, 'destroy'])->name('contact.destroy');
});