<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function replies(): HasMany
    {
        return $this->hasMany(Reply::class);
    }
    public function like(): HasOne
    {
        return $this->hasOne(LikeComment::class);
    }
    public function likes(): HasMany
    {
        return $this->hasMany(LikeComment::class);
    }

    
}
