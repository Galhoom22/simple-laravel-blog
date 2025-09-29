@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Post</h1>
    <form action="/posts/{{ $post->id }}" method="POST">
        @method('PUT')
        @include('posts._form')
        <div>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Update Post
            </button>
            <a href="/posts/{{ $post->id }}" class="text-gray-500 ml-4">Cancel</a>
        </div>
    </form>
@endsection
