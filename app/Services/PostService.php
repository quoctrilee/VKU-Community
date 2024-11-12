<?php

namespace App\Services;

use App\Models\Post;

class PostService
{
    public function calculateScore(Post $post)
    {
        return ($post->likes_count * 2) + ($post->comments_count * 1) - (now()->diffInHours($post->created_at));
    }
}