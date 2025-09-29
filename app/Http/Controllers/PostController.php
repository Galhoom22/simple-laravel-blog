<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Contracts\Cache\Store;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        // Pass a new empty post object to the view
        return view('posts.create', ['post' => new Post()]);
    }

    public function store(StorePostRequest $request)
    {
        $validatedData = $request->validated();
        Post::create($validatedData); // Save the validated data to the database
        return redirect('/');
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]); // return the edit form view with the post data
    }

    public function update(StorePostRequest $request, Post $post)
    {
        $validatedData = $request->validated();
        $post->update($validatedData);
        // Redirect to the post's show page with a success message
        return redirect('/posts/' . $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}
