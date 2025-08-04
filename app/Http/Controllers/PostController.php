<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {

        // -------------------------------------------- start
        // $posts = Post::where('title', 'title11')->get();
        // $post = Post::find(1);

        // dd($post);
        // -------------------------------------------- end

        // $newPost = new Post();
        // $newPost->title = 'new post 4';
        // $newPost->short_content = 'Short content of new post 1';
        // $newPost->content = 'Content of new post 1';
        // $newPost->photo = '/storage/newPost.png';

        // $newPost->save();

        // $newPost = Post::create([
        //     'title' => '5',
        //     'short_content' => 'Short',
        //     'content' => 'Content 123',
        //     'photo' => 'photo.jpg'
        // ]);

        // ----------------Update qilish start
        // $post = Post::find(4);
        // $post->title = 'O\'zgartirilgan Sarlavha';
        // $post->save();


        // $post = Post::find(4)->update(['title' => '222 O\'zgartirilgan Sarlavha']);

        // ----------------Update qilish end

        // ------------------- Delete qilish start

        // $post = Post::where('id', 5)->first();
        // $post->delete();

        // yoki destroy qilib o'chirish
        // Post::destroy(5);

        // return 'Deleted';
        // return view('posts.index');

        // ------------------- Soft Delete qilish start
        // Buning uchun Post modelida SoftDeletes traitini qo'shish kerak
        // va migration faylida deleted_at ustunini qo'shish kerak

        // $post = Post::destroy(3); // id si 3 bo'lgan postni o'chirish

        $post = Post::withTrashed()->find(3)->restore(); // Soft delete qilingan postni ortiga qaytarish
        $post = Post::all(); // hamma postlarni olish
        dd($post);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
