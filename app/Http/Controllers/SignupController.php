<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    //

    // untuk method get
    public function index(){
        return view('signup');
    }

    // untuk method post
    public function store(Request $request){
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:55',
            'username' => 'required|min:3|max:25|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:55|confirmed',
            'password_confirmation' => 'required|min:6|max:55',
            'phone' => 'required|numeric|digits_between:9,13',
            'address' => 'required|min:5|max:100'
        ]);

        // dd($request);
        // dd('registrasi berhasil');

        $validatedData['password'] = Hash::make($validatedData['password']);

        // User::create($validatedData);

        User::create([
            // 'name' => $validatedData['name'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address']
        ]);

        return redirect('/signin')->with('success', 'Sign up successful! Please login!');

    }
}
