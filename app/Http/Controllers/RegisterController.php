<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('initial-view.register');
    }

    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'Username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'Password' => 'required|min:5|max:255',
            'Email' => 'required|unique:users',
            'NamaLengkap' => 'required|max:255',
            'Alamat' => 'required|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['Password'] = Hash::make($validatedData['Password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successfull! Please login');

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
