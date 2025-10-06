<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class UserMessage extends Model
    //, Message
{
    /** @use HasFactory<\Database\Factories\UserMessageFactory> */
    use HasFactory;

    protected $fillable = [
        'inhalt',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

/*
    public function empfaengers(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
 */
}
