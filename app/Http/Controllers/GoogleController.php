<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Models\users;
use Session;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallBack(){
        try{
            $user = Socialite::driver('google')->user();
            $findUser = users::where('google_id',$user->id)->first();

            if($findUser){
                Session::put('logged_in', true);
                Session::put('id',$findUser->id);
                Session::put('name',$findUser->first_name.' '.$findUser->last_name);
                return redirect()->intended('userhome');
            }else{
                return view('welcome',['google_user'=>$user]);
            }
        }catch(Exception $e){
            return view('welcome')->with('error', 'Whoops! '.$e);
        }
    }
   
}
