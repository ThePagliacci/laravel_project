<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    public function authenticated()
    {
        if(Auth::user()->role_as == '1')
        {
            return redirect('admin/dashboard')->with('message', 'Admin paneline hoş geldiniz');
        }
        else if(Auth::user()->role_as == '0')
        {
            return redirect('/anasayfa')->with('message', 'Başarıyla giriş yapıldı');
        }
        else
        {
            return redirect('/anasayfa');
        }
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
