<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view("login", [
            "title" => "Login"
        ]);
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $request->session()->flash('success_login', 'Login berhasil');


            return redirect()->intended('/');
        }

        return back()->with('loginFailed', 'Username atau Password salah');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $request->session()->flash('success_logout', 'Logout berhasil');

        return redirect('/');
    }
}
