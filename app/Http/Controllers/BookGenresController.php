<?php

namespace App\Http\Controllers;

use App\Models\BookGenre;
use Illuminate\Http\Request;

class BookGenresController extends Controller
{
    public function show($id)
    {
        $genre = BookGenre::with('books')->find($id);

        return view('category', compact('genre'));
    }
}
