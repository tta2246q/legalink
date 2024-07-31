<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;


Route::get('/ ', function () {
    return view('user.index');
});


///////

Route::get('/home', [homecontroller::class,'home'])->name('home');
Route::get('/login', [homecontroller::class,'login'])->name('login');
Route::get('/register', [homeController::class, 'register'])->name('register');
Route::get('/pages', [homeController::class, 'pages'])->name('pages');
Route::get('/blog', [homeController::class, 'blog'])->name('blog');
Route::get('/team', [homeController::class, 'team'])->name('main-team');
Route::get('/patricia', [homeController::class, 'patricia'])->name('patricia');
Route::get('/contact', [homeController::class, 'contact'])->name('contact');
Route::get('/error', [homeController::class, 'error'])->name('error');
Route::get('/gallery', [homeController::class, 'gallery'])->name('gallery');
Route::get('/price', [homeController::class, 'price'])->name('price');