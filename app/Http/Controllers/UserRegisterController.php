<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserRegisterController extends Controller
{
    public function index(){
        return view("UserAuth.Register");
    }
    public function addUser(Request $request){
       $validUsers =  $request->validate([
            'name' => 'required|string|max:25|min:3',   
            'email' => 'required|email|unique:users,email',   
            'password' => 'required|min:8',   
            'gender' => 'required|string',  
            'date_of_birth' => 'required|date',   
        ]);
        $users = User::create([$validUsers]);
      //  return dd($users);
    }
}
