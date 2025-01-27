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
            
            if (Auth::attempt($user)) {
                $request->session()->regenerate();
                return redirect()->route("welcome")->with("success","Login Successfully");
            }    
            else
            {
                return back()->withErrors("error","Login email or password is incorrect ");
            }
        }
        
    }

    public function UserLogout(){
        Auth::logout();
        return view("UserAuth.Login");
    }
}
