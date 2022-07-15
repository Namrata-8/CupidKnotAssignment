<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Session;

class UserController extends Controller
{
    public function userLogin(Request $request){
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $userCredentials = users::where('email',$email)->where('password',$password)->first();
        if($userCredentials){
            Session::put('logged_in', true);
            Session::put('id',$userCredentials->id);
            Session::put('name',$userCredentials->first_name.' '.$userCredentials->last_name);
            return redirect()->intended('userhome');
        }

        else {
            return back()->with('error', 'Whoops! invalid email or password.');
        }
    }

    public function userLogout(Request $request) {
         Session::put('logged_in',false);
         return redirect()->intended('/');
    }

    public function userSignup(Request $request){
        $email = $request->input('email');
        
        if(users::where('email',$email)->exists()){
            return back()->with('error', 'Whoops! email already exists.');
        }else{
            $user = users::create($request->all());
            $userCredentials = users::where('email',$email)->first();

            Session::put('logged_in', true);
            Session::put('id',$userCredentials->id);
            Session::put('name',$userCredentials->first_name.' '.$userCredentials->last_name);
            return redirect()->intended('userhome');
        }
    }
}
