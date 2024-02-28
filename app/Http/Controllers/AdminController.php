<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   
    public function admin(){
        session()->forget('cart');
        return view ('adminlogin');
    }

    public function adminpost(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        if($email === 'admin' && $password === 'admin'){
            return redirect('/dashboard');
        }
        else {
            return back()->with('error', 'Invalid email or password. Please check your credentials and try again.');
        }
        return back()->with('error','Error with logging in, Please check your email or password and try again');
    }

  
    

   
}
