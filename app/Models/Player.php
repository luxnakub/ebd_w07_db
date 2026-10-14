<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['player_name', 'genre_id'];

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }
}