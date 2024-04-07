<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function images(): HasMany
    {
        return $this->hasMany(ImagePost::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function like(): HasOne
    {
        return $this->hasOne(LikePost::class);
    }

    public function likes(): HasMany
    {
        return $this->hasMany(LikePost::class);
    }

    public function commentsWithLikesCount(): HasMany
    {
        return $this->commentsWithLikesCount()
            ->withCount('likes');
    }
}
