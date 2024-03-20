<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('login', function () {
    return view('admin/login');
})->name('login');

Route::get('/dashboard', function () {
    return view('./admin/dashboard');
})->name('admin.dashboard');

// Route::get('/gallery', function () {
//     return view('./admin/gallery/index');
// })->name('admin.gallery');

Route::get('/gallery', [ImageController::class, 'showGallery'])->name('admin.gallery');

Route::post('/image/add', [ImageController::class, 'addImage'])->name('image.add');

Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');

/* Start Category */
Route::prefix('category')->group(function () {
    Route::post('/add', [CategoryController::class, 'add'])->name('admin.category.add');
    Route::get('/list', [CategoryController::class, 'list'])->name('admin.category.list');
    Route::post('/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::post('/update', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::post('/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
});
/* End Category */

/* Start Product */
Route::prefix('product')->group(function () {
    Route::post('/add', [ProductController::class, 'add'])->name('admin.product.add');
    Route::get('/list', [ProductController::class, 'list'])->name('admin.product.list');
    Route::post('/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::post('/update', [ProductController::class, 'update'])->name('admin.product.update');
    Route::post('/delete/{id}', [ProductController::class, 'delete'])->name('admin.product.delete');
});
/* End Product */

Route::get('orders', function () {
    return view('admin/order/index');
})->name('orders');