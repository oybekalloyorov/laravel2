<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        // Logic to display a list of comments
    }

    public function create()
    {
        // Logic to show form for creating a new comment
    }

    public function store(Request $request)
    {
        $comment = Comment::create([
            'post_id' => $request->post_id,
            'user_id' => 1,
            'body' => $request->body,
        ]);
        // --------------------------- ikkalasi bitta ishni bajaradi ------------------

        // $post = Post::find($request->post_id);
        // $post->comments()->create([
        //     'user_id' => $request->user_id,
        //     'body' => $request->body,
        // ]);

        return redirect()->back();
    }

    public function show($id)
    {
        // Logic to display a specific comment
    }

    public function edit($id)
    {
        // Logic to show form for editing a comment
    }

    public function update(Request $request, $id)
    {
        // Logic to update a specific comment
    }

    public function destroy($id)
    {
        // Logic to delete a specific comment
    }
}
