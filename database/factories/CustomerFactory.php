<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CustomerFactory extends Factory
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
            'name' => 'Lê Quốc Trí',
            'username' => 'quoctrilee',
            'email' => 'trilq.05@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('quoctridz123'), // Hash mật khẩu
            'profile_picture' => 'profile_pictures/' . $imageName,
            'bio' => 'hello',
            'birthdate' => '2005-01-17', // Định dạng ngày tháng chuẩn
            'location' => 'Quảng Nam',
        ];
    }
}