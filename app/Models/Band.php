<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Band extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'starts_at',
        'ends_at'
    ];

    public function songs(): MorphMany{
        return $this->morphMany(SongExecutor::class,'songs', 'model_name', 'model_id');
    }

    public function albums(): MorphMany{
        return $this->morphMany(AlbumExecutor::class, 'albums', 'model_name', 'model_id')->with('albums.songs');
    }

    public function artists(): HasMany{
        return $this->hasMany(BandComposition::class, 'band_id');
    }
}
