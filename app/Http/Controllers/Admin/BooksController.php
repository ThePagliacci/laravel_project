<?php
namespace App\Http\Controllers\Admin;
use App\Models\Book;
use App\Models\Writer;

use App\Models\Comment;
use App\Models\BookGenre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CategoryFormRequest;


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('admin.books.index', compact('books')); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::all();
        $bookGenres = BookGenre::all();
        $writers = Writer::all();
        
        return view('admin.books.create', compact('books', 'bookGenres', 'writers'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryFormRequest $request)
    {
        $data = $request->validated();

        $book = new Book;
        $book->name = $data['name'];
        $book->writer_id = $data['writer_id'];
        $book->genre_id = $data['genre_id'];

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/category/', $filename);
            $book->image = $filename;
        }
        $book->save();
        return redirect('/admin/book')->with('message', 'kategori Başarıyla Eklendi');
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
        $book = Book::find($id);
        $bookGenres = BookGenre::all();
        $writers = Writer::all();

        return view('admin.books.edit', compact('book', 'bookGenres', 'writers'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryFormRequest $request, $id)
    {
        $data = $request->validated();

        $book = Book::find($id);
        $book->name = $data['name'];
        $book->writer_id = $data['writer_id'];
        $book->genre_id = $data['genre_id'];

        if($request->hasfile('image'))
        {
            $destination = 'uploads/category/'.$book->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/category/', $filename);
            $book->image = $filename;
        }
        $book->update();
        return redirect('/admin/book')->with('message', 'kategori Başarıyla Düzenlendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        if($id)
        {
            $destination = 'uploads/category/'.$book->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $book->delete();
            return redirect('/admin/book')->with('message', 'Yorum Başarıyla Silindi');

        }
        else
        {
            return redirect('/admin/book')->with('message', 'kitap bulunmadi');

        }
        
    }
}
