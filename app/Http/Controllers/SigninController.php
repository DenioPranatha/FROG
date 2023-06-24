<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    //
    public function index(){
        return view('signin');
    }

    public function authenticate(Request $request){

        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // $request->validate([
        //     'username' => 'required|email:dns',
        //     'password' => 'required'
        // ]);

        // dd("berhasil login");

        // dd($credentials);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/index');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function signout(Request $request){
        // dd($request);
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/index');
    }
}
