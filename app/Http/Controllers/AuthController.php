<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register(){
        return view ('register');
    }

    public function registerpost(Request $request){
        $existinguser = User::where('email',$request->email)->first();
        if ($existinguser) {
            return back()->with('error','Email has been already taken');
        }

        else{
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            return back()->with('success','Registration successfully');
        }
    }
    public function login(){
        session()->forget('cart');
        return view ('login');
    }
    public function loginpost(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' =>$request->password,
        ];

        if(Auth::attempt($credentials)){
            return redirect('/main');
        }
        else {
            return back()->with('error', 'Invalid email or password. Please check your credentials and try again.');
        }
        return back()->with('error','Error with logging in, Please check your email or password and try again');
    }

    public function logout(){
        session()->forget('cart');
        Auth::logout();
        return redirect('/');
    }
}
