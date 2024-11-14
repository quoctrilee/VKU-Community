$(document).ready(function() {
    if ($('#home-page').length) {
        let page = 1;
        let loading = false;

        function loadMorePosts() {
            if (loading) return;
            loading = true;
            page++;

            $.ajax({
                url: '/load-more-posts', // Sử dụng URL tương đối
                type: 'GET',
                data: {
                    page: page,
                },
                success: function(response) {
                    if (response.length > 0) {
                        response.forEach(post => {
                            $('#post-container').append(`
                                <div class="bg-white rounded-lg shadow post-item" data-post-id="${post.id}">
                                    <div class="p-4">
                                        <div class="flex items-center space-x-3">
                                            <img src="/storage/${post.user.profile_picture}" alt="User" class="w-10 h-10 rounded-full">
                                            <div>
                                                <div class="font-semibold">${post.user.name}</div>
                                                <div class="text-gray-500 text-sm">${post.created_at}</div>
                                            </div>
                                        </div>
                                        <p class="mt-3">${post.content}</p>
                                        ${post.image ? `<img src="/storage/${post.image}" alt="Post Image" class="mt-3 rounded-lg">` : ''}
                                        <div class="mt-4 flex items-center space-x-4">
                                            <button class="flex items-center space-x-2 text-gray-500 hover:text-gray-700">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                </svg>
                                                <span>${post.likes_count}</span>
                                            </button>
                                            <button class="flex items-center space-x-2 text-gray-500 hover:text-gray-700">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                                </svg>
                                                <span>${post.comments_count}</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            `);
                        });
                        loading = false;
                    } else {
                        $(window).off('scroll');
                        $('#no-more-posts').show();
                    }
                },
                error: function() {
                    loading = false;
                }
            });
        }

        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() === $(document).height()) {
                loadMorePosts();
                console.log('load more posts');
            }
        });
    }
});