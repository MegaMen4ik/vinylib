<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'album_id',
        'length',
        'release_date',
    ];

    public function album(): BelongsTo{
        return $this->belongsTo(Album::class, 'album_id')->with('executors:album_id,model_name,model_id');
    }

    public function artist(): BelongsTo{
        return $this->belongsTo(Artist::class, 'artist_id');
    }

    public function band(): BelongsTo{
        return $this->belongsTo(Band::class, 'band_id');
    }
}
