@extends('layouts.app')

@section('main')
    <div class="max-w-2xl w-full py-4" id="home-page">
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
                        {{-- like --}}
                        <div class="mt-4 flex items-center space-x-4">
                            <form class="like-form" method="post" action="{{ route('like-post') }}">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <button class="flex items-center space-x-2 text-gray-500 hover:text-gray-700" type="submit">
                                    <x-like :liked="$post->isLikedBy(auth()->user())"></x-like>
                                    <span id="like-count-{{ $post->id }}">{{ $post->likes->count() }}</span>
                                </button>
                            </form>

                        {{-- comment --}}
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
        <div id="no-more-posts" class="text-center text-gray-500 mt-4" style="display: none;">
            No more posts to load.
        </div>
    </div>
@endsection
