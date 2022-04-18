<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\User;


class Author extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
