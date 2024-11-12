<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        // Tải ảnh từ Lorem Picsum và lưu vào thư mục public
        $imageUrl = 'https://picsum.photos/200/300';
        $imageContents = file_get_contents($imageUrl);
        $imageName = Str::random(10) . '.jpg';
        Storage::disk('public')->put('post_images/' . $imageName, $imageContents);

        return [
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'content' => $this->faker->paragraph,
            'image' => 'post_images/' . $imageName, // Lưu đường dẫn ảnh vào cơ sở dữ liệu
            'file' => $this->faker->filePath(),
        ];
    }
}