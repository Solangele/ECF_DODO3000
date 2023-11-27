<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // public function login()
    // {
    //     return view('/connexion');
    // }

    // /**
    //  * Handle an authentication attempt.
    //  */
    // public function authenticate(Request $request): RedirectResponse
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
            
    //     ]);
 
    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
 
    //         return redirect()->intended('/matelas');
    //     }
 
    //     return back()->withErrors([
    //         'email' => 'Identifiants incorrects.',
    //     ])->onlyInput('email');
    // }

}
