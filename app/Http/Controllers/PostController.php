<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
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
        return view('posts.create');
    }


    public function store(StorePostRequest $request)
    {
        if ($request->hasFile('photo')) {
            $name = $request->file('photo')->getClientOriginalName();

            $path = $request->file('photo')->storeAs('post-photos', $name); // 'public' disk is used by default,
            // $path = $request->file('photo')->store('post-photos', 'local'); // 'local' disk is used here
        }


        $post = Post::create([
            'title' => $request->input('title'),
            'short_content' => $request->input('short_content'),
            'content' => $request->input('content'),
            'photo' => $path ?? null,
            // 'image' => $request->file('image')->store('posts', 'public')
        ]);
        return redirect()->route('posts.index');
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
