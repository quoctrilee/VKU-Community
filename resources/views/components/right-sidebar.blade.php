<div class="p-4 h-full space-y-4">
    <div class="bg-gray-100 rounded-lg p-4 border border-gray-300">
        <div class="flex items-center space-x-4">
            @if($currentUser && $currentUser->profile_picture)
                <img src="{{ asset('storage/' . $currentUser->profile_picture) }}" alt="currentuser" class="w-10 h-10 rounded-full">
            @else
                <img src="/api/placeholder/40/40" alt="currentuser" class="w-10 h-10 rounded-full">
            @endif
            <h3 class="text-xl">Trang cá nhân</h3>
        </div>
    </div>
    <div class="bg-gray-100 rounded-lg p-4 border border-gray-300">
        <h3 class="font-semibold">Thông báo</h3>
    </div>
</div>