<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::with('user')->get();

        return view('admin.messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $messages = Message::all();
        $users = User::all();
    
        return view('admin.messages.create', compact('messages', 'users'));
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
            'message' =>'required|string',
            'user_id' => 'integer'
        ]);
    
        $data['user_id'] = Auth::user()->id;
    
        $message = new Message;
        $message->message = $data['message'];
        $message->user_id = $data['user_id'];
        $message->save();
    
        return redirect('admin/message')->with('message', 'Mesaj Başarıyla Eklendi');

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
        $message = Message::find($id);
        $users = User::all();
    
        return view('admin.messages.edit', compact('message', 'users'));
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
        $message = Message::find($id);

        $data = $request->validate([
            'message' =>'required|string',
            'user_id' => 'integer'
        ]);
    
        $data['user_id'] = Auth::user()->id;

        $message->message = $data['message'];
        $message->user_id = $data['user_id'];
        $message->update();
    
        return redirect('admin/message')->with('message', 'Mesaj Başarıyla Düzenlendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $message = Message::find($id);
        $message->delete();

        return redirect('admin/message')->with('message', 'Mesaj Başarıyla silindi');
    }
}
