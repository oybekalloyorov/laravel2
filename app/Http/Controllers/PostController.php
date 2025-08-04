<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB as DB;

class PostController extends Controller
{

    public function index()
    {
        // $posts = DB::table('posts')->where('title', 'title 1')->get(); faqat title 1 bo'lgan postlarni olish uchun

        // $posts = DB::table('posts')->get()->pluck('title'); // barcha postlarning title larini olish uchun);

        // $posts = DB::table('posts')->get()->chunk(2); // postlarni 2 ta qilib bo'lib olish uchun

        // $posts = DB::table('posts')->whereMonth('updated_at', '08')->get(); // faqat 8-oyda yangilangan postlarni olish uchun
        // $posts = DB::table('posts')->latest()->get(); // barcha postlarni oxirgi tartibida olish yani created_at bo'yicha

        // $posts = DB::table('posts')->insert([
        //     'title' => 'New Post 123',
        //     'content' => 'This is the content of the new post. 123',
        //     'short_content' => 'This is the content of the new post. 123',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]); // yangi post qo'shish

        $posts = DB::table('posts')->where('id', 1)->delete(); // id si 1 bo'lgan postni o'chirish
        dd($posts);

        return "Success";

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
