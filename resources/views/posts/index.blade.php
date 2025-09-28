@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">All Posts</h1>

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
