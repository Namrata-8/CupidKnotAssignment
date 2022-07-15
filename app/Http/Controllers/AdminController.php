<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use App\Models\adminLogin;

class AdminController extends Controller
{
    public function adminLogin(Request $request){
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $userCredentials = adminLogin::where('email',$email)->where('password',$password)->get();
        if(sizeof($userCredentials)){
            Session::put('admin_logged_in', true);

            return redirect()->intended('adminhome');
        }

        else {
            return back()->with('error', 'Whoops! invalid email or password.');
        }
    }

    public function adminLogout(Request $request) {
         Session::put('admin_logged_in',false);
         return redirect()->intended('/adminlogin');
     }
}
