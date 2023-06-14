<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class BookGenre extends Model
{
    use HasFactory;
    protected $guarded = [];


    protected $table = 'book_genres';
    protected $fillable = [
        'name'
    ];

    /**
     * Get all of the comments for the BookGenre
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Books(): HasMany
    {
        return $this->hasMany(Book::class, 'genre_id', 'id');
    }
}
