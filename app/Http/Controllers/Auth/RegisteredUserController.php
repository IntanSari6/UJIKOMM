<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'Username' => ['required', 'string', 'max:255'],
            'Password' => ['required', Rules\Password::defaults()],
            'Email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'NamaLengkap' => ['required', 'string', 'max:255'],
            'Alamat' => ['required'],
        ]);

        $user = User::create([
            'username' => $request->Username,
            'password' => Hash::make($request->Password),
            'email' => $request->Email,
            'NamaLengkap' => $request->NamaLengkap,
            'Alamat' => $request->Alamat,
           
        ]);

        event(new Registered($user));

        // Auth::login($user);

        return redirect('/login');
    }
}
