<?php

namespace App\Http\Controllers\Admin;

use App\Models\BookGenre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookGenresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = BookGenre::all();
        return view('admin.genres.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bookGenres = BookGenre::all();
        return view('admin.genres.create', compact('bookGenres'));
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
            'name' =>'required|string'
        ]);

        $genre = BookGenre::create([
            'name' => $data['name'],
        ]);

        return redirect('admin/genres')->with('message', 'kitap türü Başarıyla Eklendi');
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
        $bookGenre = BookGenre::find($id);

        return view('admin.genres.edit', compact('bookGenre'));
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
        $genre = BookGenre::find($id);

        $data = request()->validate([
            'name' =>'required|string'
        ]);
        $genre->name = $data['name'];
        $genre->update();
    
        return redirect('admin/genres')->with('message','türü Başarıyla Düzenlendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genre = BookGenre::find($id);

        $genre->delete();

        return redirect('admin/genres')->with('message','türü Başarıyla silindi');
    }
}
