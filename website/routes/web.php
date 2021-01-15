<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.home');
});


Route::post('/', [App\Http\Controllers\PostController::class, 'store'])->name('store');
Route::get('/pages/home', [App\Http\Controllers\PagesController::class, 'home'])->name('home');
Route::get('/pages/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about');
Route::get('/pages/services', [App\Http\Controllers\PagesController::class, 'services'])->name('services');
Route::get('/pages/gallery', [App\Http\Controllers\PagesController::class, 'gallery'])->name('gallery');
Route::get('/pages/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
