<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function loginPage(){
        return view("Admin.Auth.login");
    }

    public function registerPage(){
        return view("Admin.Auth.register");
    }

    // Handle Login Process
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Check if user is admin (you can adjust this logic)
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin/dashboard')->with('success', 'Login successful');
            } else {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'Unauthorized access.',
                ]);
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Handle Register Process
    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'gender' => 'Male',
            'date_of_birth' => '08/08/0000',
            'role' => 'admin', // Make sure your users table has a 'role' column
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/admin/dashboard')->with('success', 'Registration successful');
    }

    // Handle Logout
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
