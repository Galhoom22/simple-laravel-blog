@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">All Posts</h1>
        <a href="/posts/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Create New Post
        </a>
    </div>

    <div class="space-y-4">
        @foreach ($posts as $post)
            <div class="p-4 bg-white rounded-lg shadow-md">
                <a href="/posts/{{ $post->id }}" class="text-xl font-semibold text-blue-600 hover:underline">
                    {{ $post->title }}
                </a>
                <p class="text-gray-600 mt-2">{{ $post->body }}</p>
            </div>
        @endforeach
    </div>
@endsection
