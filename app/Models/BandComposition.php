<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BandComposition extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist_id',
        'band_id',
        'get_in',
        'get_out'
    ];

    public function band():BelongsTo
    {
        return $this->belongsTo(Band::class, 'band_id');
    }
    public function artists():BelongsTo
    {
        return $this->belongsTo(Artist::class, 'artist_id');
    }
}
