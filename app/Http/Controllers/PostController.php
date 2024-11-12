<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\ViewedPost;
use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index(Request $request)
    {
        $user = Auth::user();
        $perPage = $request->input('per_page', 5);
        $page = $request->input('page', 1);

        // Lấy danh sách các bài viết mà người dùng đã xem
        $viewedPostIds = ViewedPost::where('user_id', $user->id)->pluck('post_id');

        // Lấy các bài viết chưa xem, sắp xếp theo thời gian tạo và phân trang
        $posts = Post::with('user')
            ->withCount('comments', 'likes')
            ->whereNotIn('id', $viewedPostIds)
            ->orderBy('created_at', 'desc')
            ->paginate($perPage, ['*'], 'page', $page);

        // Tính điểm cho các bài viết
        foreach ($posts as $post) {
            $post->score = $this->postService->calculateScore($post);
        }

        // Sắp xếp các bài viết theo điểm
        $posts = $posts->sortByDesc('score');

        // Lưu thông tin bài viết đã xem vào cơ sở dữ liệu
        $viewedPosts = $posts->map(function ($post) use ($user) {
            return [
                'user_id' => $user->id,
                'post_id' => $post->id,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        })->toArray();

        ViewedPost::insertOrIgnore($viewedPosts);

        $currentUser = $user;
        return view('home', compact('posts', 'currentUser'));
    }

    public function loadMorePosts(Request $request)
    {
        $user = Auth::user();
        $lastPostId = $request->input('last_post_id');
        $perPage = $request->input('per_page', 5);
        $page = $request->input('page', 1);
    
        // Lấy danh sách các bài viết mà người dùng đã xem
        $viewedPostIds = ViewedPost::where('user_id', $user->id)->pluck('post_id');
    
        // Lấy các bài viết chưa xem, sắp xếp theo thời gian tạo và phân trang
        $newPosts = Post::with('user')
            ->withCount('comments', 'likes')
            ->whereNotIn('id', $viewedPostIds)
            ->where('id', '<', $lastPostId)
            ->orderBy('created_at', 'desc')
            ->paginate($perPage, ['*'], 'page', $page);
    
        // Tính điểm cho các bài viết
        foreach ($newPosts as $post) {
            $post->score = $this->postService->calculateScore($post);
        }
    
        // Sắp xếp các bài viết theo điểm
        $newPosts = $newPosts->sortByDesc('score');
    
        // Lưu thông tin bài viết đã xem vào cơ sở dữ liệu
        $viewedPosts = $newPosts->map(function ($post) use ($user) {
            return [
                'user_id' => $user->id,
                'post_id' => $post->id,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        })->toArray();
    
        ViewedPost::insertOrIgnore($viewedPosts);
    
        return response()->json($newPosts);
    }
}