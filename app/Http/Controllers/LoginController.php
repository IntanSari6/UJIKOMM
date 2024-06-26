<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('initial-view.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'Email' => 'required|Email:dns',
            'Password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        
        // dd($credentials);
          return back()->with('loginError', 'login failed!');
    
         }

        public function logout()
        {
            Auth::logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
            return redirect('/');
    }
}
