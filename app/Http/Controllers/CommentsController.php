<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;

class CommentsController extends Controller
{
    public function __construct() //// authantication için kullanıcı giriş yapmadan girmemeli
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::with('user')->get();
        return view('comments.index', compact('comments'));
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
    
        return view('comments.create', compact('books', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request) // yeni bir request oluşturdum veri doğrulama için
    {
        $request->validated();

        $comment = Comment::create([
            'description' => $request->input('description'),
            'book_id' => $request->input('book_id'),
            'user_id' => Auth::user()->id
        ]);

        return redirect('/comments')->with('message', 'Yorum Başarıyla Eklendi');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Comment::find($id);
        return view('comments.show', compact('comment'));
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
       return view('comments.edit', compact('comment', 'books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CommentRequest $request, $id)
    {
        $validatedData = $request->validated();

        $comment = Comment::find($id);

        $comment-> description = $validatedData['description'];
        $comment-> book_id = $validatedData['book_id'];
        $comment -> user_id = Auth::user()->id;
        
        $comment->save();
        return redirect('/comments')->with('message', 'Yorum Başarıyla Düzenlendi');
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
        
        return redirect('/comments')->with('message', 'Yorum Başarıyla Silindi');
    }
}
