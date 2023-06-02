<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookGenre;
use App\Models\Comment;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::with(['writer:id,name', 'bookGenre:id,name'])//belongs to relationship
                            ->select('id', 'name', 'writer_id', 'image', 'genre_id')
                            ->get();

        return view('index', compact('books'));
    }

    public function show($id)
    {
        /*$book = Book::with('comments:user_id,book_id,description,created_at')->  //has many relationship
                            select('id', 'name', 'writer_id', 'image', 'genre_id')
                            ->find($id);
        */
        $book = Book::with(['comments'])->find($id);

        return view('show', compact('book'));
    }
}
