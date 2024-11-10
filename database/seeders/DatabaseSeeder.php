<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Gọi tất cả các seeder cần thiết
        $this->call([
            UserSeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
            LikeSeeder::class,
            FriendSeeder::class,
            FollowSeeder::class,
            NotificationSeeder::class,
        ]);
    }
}