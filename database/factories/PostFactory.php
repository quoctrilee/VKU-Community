<?php
namespace Database\Factories;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
class PostFactory extends Factory
{
    protected $model = Post::class;
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'content' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl(),
            'file' => $this->faker->filePath(),
        ];
    }
}