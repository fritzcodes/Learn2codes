<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class prog_language extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function modules():HasMany
    {
        return $this->hasMany(Module::class, 'language', 'language');
    }
    public function exercises():HasMany
    {
        return $this->hasMany(Exercise::class, 'language', 'language');
    }
    public function quizzes():HasMany
    {
        return $this->hasMany(Quizzes::class, 'language', 'language');
    }
}
