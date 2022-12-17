<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login()
    {
       return view('auth.login');
    }

    public function store(Request $request)
    {
       $attributes = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
       ]);

       if (Auth::attempt($attributes)) {
            return redirect('pegawai')->with('success', 'Anda berhasil login');
       }
        throw ValidationException::withMessages([
            'email' => 'Email Anda tidak sesuai dengan password'
        ]);
    }
}
