<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function create()
    {
        $users = User::all();
        $message = Message::all();

        return view('contact', compact('users', 'message'));
    }

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

        return redirect('anasayfa')->with('message', 'Mesajınız Başarıyla Gönderildi, Teşekkürler!!');
    }
}
