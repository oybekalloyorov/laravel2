<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TestConteroller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'main']);
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
// Route::get('/welcome', [PageController::class, 'welcome']);
// Route::view('salom', 'salom');






// Route::get('/users', [UserController::class, 'index']);
// Route::get('/users/create', [UserController::class, 'create']);
// Route::get('/users/{user}', [UserController::class, 'show']);
// Route::get('/users/{user}/edit', [UserController::class, 'edit']);

// Route::post('/user-create', [UserController::class, 'store']);
