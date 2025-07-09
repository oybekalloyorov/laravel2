<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestConteroller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'main']);
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('projects', [PageController::class, 'projects'])->name('projects');
Route::get('contact', [PageController::class, 'contact'])->name('contact');

// yuqoridagilarni ornini bosadi
Route::resource('posts', PostController::class);


// Route::get('/posts',[PostController::class, 'index'])->name('posts.index');
// Route::get('/posts/{post}',[PostController::class, 'show'])->name('posts.show');
// Route::get('/posts/create',[PostController::class, 'create'])->name('posts.create');
// Route::post('/posts/create',[PostController::class, 'store'])->name('posts.store');
// Route::get('/posts/{post}/edit',[PostController::class, 'edit'])->name('posts.edit');
// Route::put('/posts/{post}/edit',[PostController::class, 'update'])->name('posts.update');
// Route::delete('/posts/{post}/delete',[PostController::class, 'delete'])->name('posts.delete');







// Route::get('/users', [UserController::class, 'index']);
// Route::get('/users/create', [UserController::class, 'create']);
// Route::get('/users/{user}', [UserController::class, 'show']);
// Route::get('/users/{user}/edit', [UserController::class, 'edit']);

// Route::post('/user-create', [UserController::class, 'store']);
