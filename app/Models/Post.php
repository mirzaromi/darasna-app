<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Author;
use App\Models\Comment;


class Post extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}
