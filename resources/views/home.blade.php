<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Left Sidebar -->
        <div class="w-16 md:w-60 h-full border-r flex-shrink-0">
            <div class="p-4 pl-2 h-full">
                {{-- Logo --}}
                <header class="absolute top-0 left-0 w-full p-4 pl-0">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('image/VKU.jpg') }}" alt="Logo" class="h-10 ml-2 w-auto">
                    </a>
                </header>
                {{-- Component --}}
                <nav class="space-y-2 h-full pt-20 ">
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-lg transition duration-200 ease-in-out active:bg-gray-300 mt-24">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span class="hidden md:inline">Trang chủ</span>
                    </a>
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-lg transition duration-200 ease-in-out active:bg-gray-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <span class="hidden md:inline">Tìm kiếm</span>
                    </a>
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-lg transition duration-200 ease-in-out active:bg-gray-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"></circle>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m-4-4h8"></path>
                        </svg>
                        <span class="hidden md:inline">Tạo bài viết</span>
                    </a>
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-lg transition duration-200 ease-in-out active:bg-gray-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                        <span class="hidden md:inline">Thông báo</span>
                    </a>
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-lg transition duration-200 ease-in-out active:bg-gray-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span class="hidden md:inline">Bạn bè</span>
                    </a>
                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-lg transition duration-200 ease-in-out active:bg-gray-300 pt-44">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <span class="hidden md:inline">Xem thêm</span>
                    </a>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex justify-center">
            <!-- Feed -->
            <div class="max-w-2xl w-full py-4">
                <!-- Post Creation -->
                <div class="bg-white rounded-lg shadow mb-4 p-4">
                    <div class="flex items-center space-x-4">
                        <img src="/api/placeholder/40/40" alt="User" class="w-10 h-10 rounded-full">
                        <input type="text" placeholder="What's happening?" class="flex-1 bg-gray-100 rounded-full px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <!-- Posts -->
                <div class="space-y-4">
                    <div class="bg-white rounded-lg shadow">
                        <div class="p-4">
                            <div class="flex items-center space-x-3">
                                <img src="/api/placeholder/40/40" alt="User" class="w-10 h-10 rounded-full">
                                <div>
                                    <div class="font-semibold">Username</div>
                                    <div class="text-gray-500 text-sm">5h ago</div>
                                </div>
                            </div>
                            <p class="mt-3">Sample post content here...</p>
                            <div class="mt-4 flex items-center space-x-4">
                                <button class="flex items-center space-x-2 text-gray-500 hover:text-gray-700">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                    <span>12</span>
                                </button>
                                <button class="flex items-center space-x-2 text-gray-500 hover:text-gray-700">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                    </svg>
                                    <span>4</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Sidebar -->
        <div class="w-16 md:w-64 h-full border-l flex-shrink-0 m-4 mt-0">
            <div class="p-4 h-full space-y-4">
                <div class="bg-gray-100 rounded-lg p-4 border border-gray-300">
                    <div class="flex items-center space-x-4">
                        <img src="/api/placeholder/40/40" alt="User" class="w-10 h-10 rounded-full">
                        <h3 class="text-xl">Trang cá nhân</h3>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-lg p-4 border border-gray-300">
                    <h3 class="font-semibold">Thông báo</h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>