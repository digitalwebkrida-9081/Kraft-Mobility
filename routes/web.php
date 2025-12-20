<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| These routes render the Blade views that were migrated from your
| original static HTML pages.
|
*/

Route::view('/', 'index')->name('home');
Route::view('/about-us', 'about-us')->name('about');
Route::view('/blog', 'blog')->name('blog');
Route::view('/contact-us', 'contact-us')->name('contact');
Route::view('/login', 'login')->name('login');


