<?php

namespace Database\Factories;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    protected $model = Notification::class;

    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'type' => $this->faker->word,
            'data' => json_encode(['message' => $this->faker->sentence]),
            'read_at' => $this->faker->optional()->dateTime,
        ];
    }
}