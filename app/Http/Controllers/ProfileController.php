<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function index(){
        // dd(Auth::user()->id);
        return view('profile');
    }

    public function edit(Request $request, User $user){
        // dd(Auth::user()->id);
        $user->image = $request->input('new-image');
        $user->username = $request->input('new-username');
        $user->email = $request->input('new-email');
        $user->phone = $request->input('new-phone');
        $user->address = $request->input('change-address');

        if($request->file('new-image')){
            $user->image = $request->file('new-image')->store('profile-images');
        }else{
            $user->image = Auth::user()->image;
        }
        // dd($user->image);
        $user->save();
        return redirect('/profile')->with('success', 'Profile Updated successfully!');
    }
}
