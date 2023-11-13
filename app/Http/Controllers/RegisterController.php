<?php

namespace App\Http\Controllers;

use App\Models\Bmi;
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
            'aktivitas' => 'required|numeric',
            'berat_badan' => 'required|numeric',
            'tinggi_badan' => 'required|numeric',
            'username' => 'required|unique:users|min:2',
            'password' => 'min:6',
            'confirm-password' => 'min:6|required_with:password|same:password'
        ]);

        $validatedBmi = $request->validate([
            'berat_badan' => 'required|numeric',
            'tinggi_badan' => 'required|numeric'
        ]);

        $user =  User::create($validatedData);

        $validatedBmi['user_id'] = $user->id;
        $validatedBmi['waktu'] = date('Y-m-d');
        $validatedBmi['nilai_bmi'] = $validatedBmi['berat_badan'] / pow(($validatedBmi['tinggi_badan'] / 100), 2);

        Bmi::create($validatedBmi);

        $request->session()->flash('success_register', 'Akun anda berhasil dibuat, silahkan login');

        return redirect('login');
    }
}
