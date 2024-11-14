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
        <a href="#" style="margin-top: 166px;" class="flex items-center space-x-2 p-2 hover:bg-gray-200 rounded-lg transition duration-200 ease-in-out active:bg-gray-300 mt-44">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <span class="hidden md:inline">Xem thêm</span>
        </a>
    </nav>
</div>