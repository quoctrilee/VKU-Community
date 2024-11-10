<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    // Các thuộc tính có thể gán hàng loạt
    protected $fillable = [
        'name', 'username', 'email', 'password', 'profile_picture', 'bio', 'birthdate', 'location',
    ];

    // Các thuộc tính bị ẩn khi trả về JSON
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Các thuộc tính cần được ép kiểu
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birthdate' => 'date',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function follows()
    {
        return $this->hasMany(Follow::class);
    }

    public function friends()
    {
        return $this->hasMany(Friend::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

}