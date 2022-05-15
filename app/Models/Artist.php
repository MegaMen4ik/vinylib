<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'pseudonym',
        'birth_date'
    ];

    public function songs(): HasMany{
        return $this->hasMany(Song::class, 'artist_id');
    }

    public function albums(): HasMany{
        return $this->hasMany(Album::class, 'artist_id');
    }

    public function bands(): HasMany{
        return $this->hasMany(BandComposition::class, 'artist_id')->with('band');
    }
}
