<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use App\Models\User;
use App\Models\Comment;
use App\Models\Writer;
use App\Models\BookGenre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::with('user','book')->get();

        return view('admin.comments.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::all();
        $users = User::all();
    
        return view('admin.comments.create', compact('books', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = request()->validate([
            'description' =>'required|string',
            'user_id' =>'required',
            'book_id' =>'required',
        ]);

        $comment = Comment::create([
            'description' => $data['description'],
            'user_id' => $data['user_id'],
            'book_id' => $data['book_id']
        ]);


        $comment->save();

        return redirect('admin/comment')->with('message', 'Yorum Başarıyla Eklendi');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::find($id);

        $books = Book::all();
        $users = User::all();
    
        return view('admin.comments.edit', compact('comment', 'books', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $comment = Comment::find($id);

        $data = request()->validate([
            'description' =>'required|string',
            'user_id' =>'required',
            'book_id' =>'required',
        ]);

        $comment->description = $data['description'];
        $comment->user_id = $data['user_id'];
        $comment->book_id = $data['book_id'];

        $comment->update();

        return redirect('admin/comment')->with('message', 'Yorum Başarıyla düzenlendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);

        $comment->delete();

        return redirect('admin/comment')->with('message', 'Yorum Başarıyla silindi');
    }
}
