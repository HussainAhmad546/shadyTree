<?php

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
    return view('index');
});
Route::get('menu', function () {
    return view('menu');
})->name('menu');

Route::get('restaurant-menu', function() {
    return view('restaurant_menu');
})->name('restaurant-menu');

Route::get('about-us', function () {
    return view('about_us');
})->name('about-us');
Route::get('photos', function () {
    return view('photos');
})->name('photos');
Route::get('looking-back', function () {
    return view('looking_back');
})->name('looking-back');
Route::get('here-we-are', function () {
    return view('here_we_are');
})->name('here-we-are');
Route::get('contact-us', function () {
    return view('contact_us');
})->name('contact-us');
