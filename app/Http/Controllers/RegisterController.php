<?php

namespace App\Http\Controllers;

use Hash;
use Carbon\Carbon;
use App\Models\Register;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;


class RegisterController extends Controller
{
    public function authlogin()
    {
        return view('register.login');
    }

    public function loginstore(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('home');
        }
        return redirect()->route('auth.login')->withErrors('Login failed. Try again with valid credentials.');
    }
    public function authlogout(Request $request)
    {

        $request->session()->flush();
        Auth::logout();
        return redirect()->route('auth.login');
    }

    public function register()
    {
        return view('register.index');
    }

    public function registerstore(Request $request)
    {

        $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'password'  => 'required|confirmed'
        ]);

        User::insert([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now()
        ]);

        // login user here

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('home');
        }
        return redirect('auth/register');
    }
}
