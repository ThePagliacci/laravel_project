<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'books';
    protected $fillable = [
        'name',
        'image',
        'writer_id',
        'genre_id'
    ];

    public function writer(): BelongsTo
    {
        return $this->belongsTo(Writer::class);
    }

    public function bookGenre(): BelongsTo
    {
        return $this->belongsTo(BookGenre::class, 'genre_id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
