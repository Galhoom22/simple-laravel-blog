@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create a New Post</h1>

    <form action="/posts" method="POST">
        @csrf

        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
            <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-6">
            <label for="body" class="block text-gray-700 text-sm font-bold mb-2">Body:</label>
            <textarea name="body" id="body" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        </div>

        <div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Create Post
            </button>
            <a href="/posts" class="text-gray-500 ml-4">Cancel</a>
        </div>
    </form>
@endsection