<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRegisterController extends Controller
{
    public function index(){
        return view("UserAuth.Register");
    }
    public function addUser(Request $request){
      
      if ($request->isMethod("post")) {
        
        $validUsers =  $request->validate([
            'name' => 'required|string|max:25|min:3',   
            'email' => 'required|email|unique:users,email',   
            'password' => 'required|min:8',   
            'gender' => 'required|string',  
            'date_of_birth' => 'required|date',   
        ]);
        $users = User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "gender"=>$request->gender,
            "date_of_birth"=>$request->date_of_birth,
            "password"=>Hash::make($request->password)
        ]);
        return redirect()->route("user.login")->with("success","Registration Completed Successfully");
      }
      
        return back()->withErrors("user.register");
    }
}
