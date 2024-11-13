<?php

namespace App\Models;

use App\Enum\MovieRating;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie extends Model
{
    protected $fillable = [
        'user_id',
        'title', 
        'release_date',
        'synopsis',
        'director',
        'rating',
        'image',
    ];

    protected function casts(): array
    {
        return [
            'rating' => MovieRating::class,
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class, 'movie_genre');
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
