<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('profile', [
            'title' => 'Profile'
        ]);
    }
    
    public function edit(UserUpdateRequest $request) {

        $data = $request->validated();
        $user = auth()->user();

        if(isset($data['name'])){
            $user->name = $data['name'];
        }
        if(isset($data['email'])){
            $user->email = $data['email'];
        }
        if(isset($data['jenis_kelamin'])){
            $user->jenis_kelamin = $data['jenis_kelamin'];
        }
        if(isset($data['tanggal_lahir'])){
            $user->tanggal_lahir = $data['tanggal_lahir'];
        }
        if(isset($data['aktivitas'])){
            $user->aktivitas = $data['aktivitas'];
        }
        if(isset($data['username'])){
            $user->username = $data['username'];
        }
        if(isset($data['password'])){
            $user->password = $data['password'];
        }

        $user->save();
    }
}
