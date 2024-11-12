<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        // Tải ảnh từ Lorem Picsum và lưu vào thư mục public
        $imageUrl = 'https://picsum.photos/200/200';
        $imageContents = file_get_contents($imageUrl);
        $imageName = Str::random(10) . '.jpg';
        Storage::disk('public')->put('profile_pictures/' . $imageName, $imageContents);

        return [
            'name' => $this->faker->name,
            'username' => $this->faker->unique()->userName,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'profile_picture' => 'profile_pictures/' . $imageName, // Lưu đường dẫn ảnh vào cơ sở dữ liệu
            'bio' => $this->faker->text,
            'birthdate' => $this->faker->date,
            'location' => $this->faker->city,
        ];
    }
}