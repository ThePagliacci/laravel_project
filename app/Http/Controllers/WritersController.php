<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Writer;
use App\Models\BookGenre;


class WritersController extends Controller
{
    public function __construct() // authantication için kullanıcı giriş yapmadan girmemeli
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $writers = Writer::select('name')->get();

        return view('writers.index', compact('writers'));
    }
    
    public function show($id)
    {
        $writer = Writer:: with(['books:name'])->find($id);

        return view('writers.show', compact('writer'));
    }
}
