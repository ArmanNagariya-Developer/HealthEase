<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserLoginController extends Controller
{
    public function index(){
        return view("UserAuth.Login");
    }
    public function LoginAuth(Request $request){
        if ($request->isMethod("post")) {
            
            $user = $request->validate([
               'email' => 'required|email',
               'password' => 'required|min:8',   
            ]);
            $request->validate([
                "terms"=>"required"
            ]);
            
            if (Auth::attempt($user)) {
                $request->session()->regenerate();
                return redirect()->route("welcome")->with("Loginsuccess","Login Successfully");
            }    
            else
            {
                return back()->with("loginError","Login email or password is incorrect ");
            }
        }
        
    }

    public function UserLogout(){
        Auth::logout();
        return view("UserAuth.Login");
    }
}
