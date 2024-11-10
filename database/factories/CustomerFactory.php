<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class CustomerFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name' => 'Lê Quốc Trí',
            'username' => 'quoctrilee',
            'email' => 'trilq.05@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('quoctridz123'), // Hash mật khẩu
            'profile_picture' => 'images/quoctrilee_avatar.jpg',
            'bio' => 'hello',
            'birthdate' => '2005-01-17', // Định dạng ngày tháng chuẩn
            'location' => 'Quảng Nam',
        ];
    }
}