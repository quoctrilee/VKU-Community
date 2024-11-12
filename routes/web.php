<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'login']);

// Route::middleware('guest')->group(function () {
//     Route::get('/login', function () {
//         return view('login');
//     })->name('login');

//     Route::post('/login', [LoginController::class, 'login']);
// });

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('home');
    Route::get('/load-more-posts', [PostController::class, 'loadMorePosts'])->name('load-more-posts');
});