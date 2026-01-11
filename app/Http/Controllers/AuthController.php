<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // 1. Validate the input
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // 2. Attempt to log the user in
        // (This checks the 'users' database table automatically)
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // 3. Logic: Redirect based on who logged in
            // For now, let's send everyone to the student dashboard
            return redirect()->intended('/student');
        }

        // 4. If login fails, go back with an error
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }
    
    public function logout(Request $request) 
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}