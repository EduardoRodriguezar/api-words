<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayedWord extends Model
{
    protected $fillable = ['player_id', 'word_id'];

    public function word()
    {
        return $this->belongsTo(Word::class);
    }
}

