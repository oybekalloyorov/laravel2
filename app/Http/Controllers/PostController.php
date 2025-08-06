<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB as DB;

use Illuminate\Routing\Controller as BaseController;

class PostController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
        // $this->middleware('auth')->only(['create', 'store', 'edit', 'update', 'destroy']);
    }

    public function index()
    {
        $posts = Post::latest()->paginate(9);

        return view('posts.index')->with('posts', $posts);


        // return view('posts.index', [
        //     'posts' => Post::all()
        // ]); // or you can use DB::table('posts')->get();

    }

    public function create()
    {
        return view('posts.create')->with([
            'categories' => Category::all(),
            'tags' => Tag::all(),
        ]);
    }


    public function store(StorePostRequest $request)
    {
        // dd($request);
        if ($request->hasFile('photo')) {
            $name = $request->file('photo')->getClientOriginalName();

            $path = $request->file('photo')->storeAs('post-photos', $name); // 'public' disk is used by default,
            // $path = $request->file('photo')->store('post-photos', 'local'); // 'local' disk is used here
        }


        $post = Post::create([
            'user_id' => 1, // Assuming user with ID 1 exists
            'category_id' => $request->input('category_id'), // Get category ID from the request
            'title' => $request->input('title'),
            'short_content' => $request->input('short_content'),
            'content' => $request->input('content'),
            'photo' => $path ?? null,
            // 'image' => $request->file('image')->store('posts', 'public')
        ]);

        if(isset($request->tags)) {

            foreach ($request->tags as $tag) {
                $post->tags()->attach($tag);
            }
        }
        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        // $post = Post::find($id);

        // return view('posts.show', [$post]);
        return view('posts.show')->with([
            'post'=> $post,
            'recent_posts' => Post::latest()->get()->except($post->id)->take(5),
            'comments' => Comment::class,
            'categories' => Category::all(),
            'tags' => Tag::all(),
        ]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }

    public function update(StorePostRequest $request, Post $post)
    {
        if ($request->hasFile('photo')) {

            if (isset($post->photo)) {
                // Delete the old photo if it exists
                Storage::delete($post->photo);
            }
            $name = $request->file('photo')->getClientOriginalName();

            $path = $request->file('photo')->storeAs('post-photos', $name); // 'public' disk is used by default,
        }

        $post->update([
            'title' => $request->input('title'),
            'short_content' => $request->input('short_content'),
            'content' => $request->input('content'),
            'photo' => $path ?? $post->photo,
        ]);

        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    public function destroy(Post $post)
    {
        if (isset($post->photo)) {
                Storage::delete($post->photo);
            }
        $post->delete();

        return redirect()->route('posts.index');
    }
}
