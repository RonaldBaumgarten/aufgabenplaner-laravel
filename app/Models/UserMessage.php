<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMessage extends Model, Message
{
    /** @use HasFactory<\Database\Factories\UserMessageFactory> */
    use HasFactory;

    protected $fillable = [
        'sender',
        'inhalt',
        'user',
    ]

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(user::class);
    }

}
