<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestConteroller;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Dom\Comment;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'main']);
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('projects', [PageController::class, 'projects'])->name('projects');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::get('test', [TestController::class, 'test'])->name('test');

// yuqoridagilarni ornini bosadi
// Route::resource('posts', PostController::class);

Route::resources([
    'posts' => PostController::class,
    'comments' => CommentController::class,
    'users' => UserController::class,
]);

