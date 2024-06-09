<?php

use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'home'])->name('home');
Route::get('/posts', [PostController::class, 'home'])->name('posts.home');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.hapus');
Route::get('/table', [PostController::class, 'table'])->name('posts.table');
