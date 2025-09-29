@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-2">{{ $post->title }}</h1>
        <p class="text-gray-500 text-sm mb-4">
            Published on {{ $post->created_at->format('M d, Y') }}
        </p>

        <div class="prose max-w-none">
            {{ $post->body }}
        </div>
    </div>

    <a href="/" class="text-blue-500 hover:underline mt-6 inline-block">&larr; Back to all posts</a>

    <a href="/posts/{{ $post->id }}/edit" class="text-green-500 hover:underline mt-6 inline-block ml-4">Edit Post</a>
@endsection
