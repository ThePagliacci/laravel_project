<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\Writer;


class WritersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $writers = Writer::all();

        return view('admin.writers.index', compact('writers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.writers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => [
                'nullable',
                'mimes:jpeg,jpg,png'
               ]
        ]);

        $writer = new Writer;
        $writer->name = $data['name'];
        $writer->description = $data['description'];
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/category/', $filename);
            $writer->image = $filename;
        }

        $writer->save();

        return redirect('admin/writer')->with('message', 'Yazar Başarıyla eklendi');
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
        $writer = Writer::find($id);

        return view('admin.writers.edit', compact('writer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $writer = Writer::find($id);

        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => [
                'nullable',
                'mimes:jpeg,jpg,png'
               ]
        ]);

        $writer->name = $data['name'];
        $writer->description = $data['description'];
        if($request->hasfile('image'))
        {
            $destination = 'uploads/category/'.$writer->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/category/', $filename);
            $writer->image = $filename;
        }

        $writer->update();

        return redirect('admin/writer')->with('message', 'Yazar Başarıyla eklendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $writer = Writer::find($id);

        $writer->delete();

        return redirect('admin/writer')->with('message', 'Yazar Başarıyla silindi');
    }
}
