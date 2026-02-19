<?php

namespace App\Http\Controllers;

use App\Models\Post;
use DB;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('posts.index')->with('posts', $posts);
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
        return view('posts.show')->with([
            'post' => $post,
            'recent_posts' => Post::where('id', '!=', $post->id)
                      ->latest()
                      ->take(5)
                      ->get()

        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
