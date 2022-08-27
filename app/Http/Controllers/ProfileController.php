<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    function profile(){

        return view('profile.indexprofile');
    }
    function profiledetails(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);
        User::find(auth()->id())->update([
            'phone_number' => $request->phone_number,
            'birth_day' => $request->birth_day,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'address' => $request->address,
            'name' => $request->name,
            'email' => $request->email
        ]);
        return back();
    }
    function changepassword(Request $request){

        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed|alpha_num|min:5',
            'password_confirmation' => 'required'
        ]);

        if($request->current_password == $request->password){
            return back()->with('message', 'current password and change password same!' );
        }
        if(Hash::check($request->current_password, auth()->user()->password)){
            User::find(auth()->id())->update([
                'password' => bcrypt($request->password)
            ]);
            return back()->with('success');
        }
        else{
            return back()->withErrors('message', 'Your password dose not match!');
        }

        return back()->with('success');

    }
}
