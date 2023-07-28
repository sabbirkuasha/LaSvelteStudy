<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [PostController::class,'index'])->name('home');
Route::post('/', [PostController::class,'store'])->name('home.post.store');
// Route::resource('home',PostController::class);

Route::get('/post', function () {
    // sleep(1);
    return Inertia::render('Post');
})->name('post');
