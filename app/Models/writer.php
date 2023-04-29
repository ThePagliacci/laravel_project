<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class writer extends Model
{
    use HasFactory;
    protected $guraded = [];

    protected $table = 'writers';
    protected $fillable = [
        'name'
    ];


    /**
     * Get all of the comments for the writer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
