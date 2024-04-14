<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reply extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function reply(): BelongsTo
    {
        return $this->belongsTo(Reply::class, 'reply_id_reply');
    }

    public function replyWithUser(): BelongsTo
    {
        return $this->reply()->with('user');
    }

}
