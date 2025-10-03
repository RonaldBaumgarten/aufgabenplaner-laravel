<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMessage extends Model, Message
{
    /** @use HasFactory<\Database\Factories\TeamMessageFactory> */
    use HasFactory;

    protected $fillable = [
        'sender',
        'inhalt',
        'task',
    ]

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(user::class);
    }

}
