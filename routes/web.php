<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix('/')->group(function () {

    Route::get('/', [HomeController::class,'index'])->name('home');
    Route::get('/privacy-policy', [HomeController::class,'privacy'])->name('privacy');
    Route::get('/contact', [HomeController::class,'contact'])->name('contact');

    Route::get('/{slug}', [PostController::class,'show'])->name('post.show');
    Route::get('/category/{slug}',[CategoryController::class,'show'])->name('category.show');
    Route::get('/tag/{slug}',[TagController::class,'show'])->name('tag.show');
});
