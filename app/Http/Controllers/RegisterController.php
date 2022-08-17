<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class RegisterController extends Controller
{
    public function register(){
        return view('register.index');
    }


    public function registerstore(Request $request){

        $request->validate([
            'name'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'email', 'max:255'],
            'password'  => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // $register = Register::insert([
        //     'name' => $request->name,
        //     'phone_number' => $request->phone_number,
        //     'email' => $request->email,
        //     'password' => $request->password,
        //     'confirm_password' => $request->confirm_password,
        //     'address' => $request->address,
        //     'created_at' => Carbon::now()
        // ]);

        $register = new Register;
        $register->name = $request->name;
        $register->phone_number = $request->phone_number;
        $register->email = $request->email;
        $register->password = $request->password;
        $register->confirm_password = $request->confirm_password;
        $register->address = $request->address;
        $register->save();

        return back();
    }

}
