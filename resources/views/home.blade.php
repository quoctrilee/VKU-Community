@extends('layouts.app')

@section('title', 'Trang chủ')

@section('main')
    <div class="max-w-2xl w-full py-4">
        <!-- Post Creation -->
        <div class="bg-white rounded-lg shadow mb-4 p-4">
            <div class="flex items-center space-x-4">
                @if ($currentUser && $currentUser->profile_picture)
                    <img src="{{ asset('storage/' . $currentUser->profile_picture) }}" alt="User"
                        class="w-10 h-10 rounded-full">
                @else
                    <img src="/api/placeholder/40/40" alt="User" class="w-10 h-10 rounded-full">
                @endif
                <input type="text" placeholder="What's happening?"
                    class="flex-1 bg-gray-100 rounded-full px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
        </div>

        <!-- Posts -->
        <div class="space-y-4" id="post-container">
            @foreach ($posts as $post)
                <div class="bg-white rounded-lg shadow post-item" data-post-id="{{ $post->id }}">
                    <div class="p-4">
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('storage/' . $post->user->profile_picture) }}" alt="User"
                                class="w-10 h-10 rounded-full">
                            <div>
                                <div class="font-semibold">{{ $post->user->name }}</div>
                                <div class="text-gray-500 text-sm">{{ $post->created_at->diffForHumans() }}</div>
                            </div>
                        </div>
                        <p class="mt-3">{{ $post->content }}</p>
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="mt-3 rounded-lg">
                        @endif
                        <div class="mt-4 flex items-center space-x-4">
                            <button class="flex items-center space-x-2 text-gray-500 hover:text-gray-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                                <span>{{ $post->likes->count() }}</span>
                            </button>
                            <button class="flex items-center space-x-2 text-gray-500 hover:text-gray-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                    </path>
                                </svg>
                                <span>{{ $post->comments->count() }}</span>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@vite('resources/js/app.js')