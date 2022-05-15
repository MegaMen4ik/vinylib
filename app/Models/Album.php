<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'artist_id',
        'release_date',
    ];

    public function songs(): HasMany{
        return $this->hasMany(Song::class, 'album_id');
    }

    public function executors(): HasMany
    {
        return $this->hasMany(AlbumExecutor::class, 'album_id')->with('executor:id,name,starts_at,ends_at');
    }
}
