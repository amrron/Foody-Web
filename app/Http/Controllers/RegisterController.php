<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view("register", [
            "title" => "Register"
        ]);
    }

    public function store(Request $request){
         $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'jenis_kelamin' => "required",
            'tanggal_lahir' => 'required|date',
            'username' => 'required|unique:users',
            'password' => 'min:6',
            'confirm-password' => 'min:6|required_with:password|same:password'
        ]);

         User::create($validatedData);

         $request->session()->flash('success', 'Akun anda berhasil dibuat, silahkan login');

         return redirect('login');
    }
}
