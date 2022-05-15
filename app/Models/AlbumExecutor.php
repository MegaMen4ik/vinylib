<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class AlbumExecutor extends Model
{
    use HasFactory;

    protected $fillable = [
        'album_id',
        'model_name',
        'model_id',
    ];
    public function albums():BelongsTo
    {
        return $this->belongsTo(Album::class, 'album_id');
    }
    public function executor(): MorphTo
    {
        return $this->morphTo('executor', 'model_name', 'model_id','id');
    }
}
