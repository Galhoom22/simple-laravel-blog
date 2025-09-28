<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create(){
        return view('posts.create'); // return the form view
    }

    public function store(StorePostRequest $request){
        $validatedData = $request->validated();
        Post::create($validatedData); // Save the validated data to the database
        return redirect('/posts');
    }
}
