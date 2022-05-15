<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SongExecutor extends Model
{
    use HasFactory;

    protected $fillable = [
        'song_id',
        'model_name',
        'model_id',
    ];

    public function songs():BelongsTo
    {
        return $this->belongsTo(Song::class);
    }
    public function artists():BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }
    public function bands():BelongsTo
    {
        return $this->belongsTo(Band::class);
    }
}
