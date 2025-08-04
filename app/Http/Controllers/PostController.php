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
        $posts = Post::all();

        return view('posts.index')->with('posts', $posts);


        // return view('posts.index', [
        //     'posts' => Post::all()
        // ]); // or you can use DB::table('posts')->get();

    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Post $post)
    {
        // $post = Post::find($id);

        // return view('posts.show', [$post]);
        return view('posts.show')->with([
            'post'=> $post,
            'recent_posts' => Post::latest()->get()->except($post->id)->take(5)
        ]);
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
