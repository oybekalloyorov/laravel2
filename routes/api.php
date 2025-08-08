<?php

use App\Models\Post;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->get('/user', function () {
    return ['name' => 'Example User'];
});


Route::get('/posts', function () {
    $posts = Cache::remember('posts', 120, function () {
        return Post::latest()->get();
    });
    return response()->json($posts);
});
