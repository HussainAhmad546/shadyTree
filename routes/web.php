<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\NewIndexController;
use App\Http\Controllers\MenuController;
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

Route::get('/', [MenuController::class, 'index']);
Route::get('menu', [MenuController::class, 'menuCategories'])->name('menu');
Route::post('get-products-by-category', [MenuController::class, 'getProducts'])->name('get_products_by_category');


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

Route::middleware('guest')->group(function () {
    Route::get('login', function () {
        return view('admin/login');
    })->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('auth.login');
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('./admin/dashboard');
    })->name('admin.dashboard');

/* Start Gallery */
Route::prefix('gallery')->group(function () {
Route::get('/list', [ImageController::class, 'showGallery'])->name('gallery.admin.list');
Route::post('/image/add', [ImageController::class, 'addImage'])->name('gallery.image.add');
Route::post('/delete/{id}', [ImageController::class, 'delete'])->name('gallery.image.delete');
});
/* End Gallery */


/* Start Category */
Route::prefix('category')->group(function () {
    Route::post('/add', [CategoryController::class, 'add'])->name('category.add');
    Route::get('/list', [CategoryController::class, 'list'])->name('category.list');
    Route::post('/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update', [CategoryController::class, 'update'])->name('category.update');
    Route::post('/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
});
/* End Category */

/* Start Product */
Route::prefix('product')->group(function () {
    Route::post('/add', [ProductController::class, 'add'])->name('product.add');
    Route::get('/list', [ProductController::class, 'list'])->name('product.list');
    Route::post('/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/update', [ProductController::class, 'update'])->name('product.update');
    Route::post('/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
});
/* End Product */

Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');

});