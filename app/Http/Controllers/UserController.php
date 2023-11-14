<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\RegisterResource;
use App\Http\Resources\SummaryResource;
use App\Http\Resources\UserResource;
use App\Models\Bmi;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(RegisterRequest $request): JsonResponse {

        
        $validatedUser =  $request->validated();
        
        $user = User::create($validatedUser);

        $validatedUser["user_id"] = $user->id;
        $validatedUser["waktu"] = date('Y-m-d');
        $validatedUser["nilai_bmi"] = $validatedUser["berat_badan"] / pow(($validatedUser["tinggi_badan"] / 100), 2);

        Bmi::create($validatedUser);

        return response()->json([
            "id" => $user->id,
            "status" => "success",
            "message" => "User berhasil ditambahkan"
        ], 201);
    }

    public function login(Request $request) : JsonResponse {
        
        if(auth()->attempt($request->only("username", "password"))){
            $user = auth()->user();
            $token = $user->createToken("api_token")->plainTextToken;

            return response()->json([
                "status" => "success",
                "message" => "Login berhasil",
                "token" => $token
            ], 201);
        }

        return response()->json([
            "status" => "error",
            "message" => "Username atau password salah"
        ], 401);

    }

    public function profile() : JsonResponse{
        $user = auth()->user();

        // return (new UserResource($user))->response()->setStatusCode(201);
        return response()->json([
            "status" => "success",
            "data" => new UserResource($user),
            "summary" => new SummaryResource($user)
        ], 201);
    }

    public function logout() : JsonResponse{
        auth()->user()->tokens()->delete();

        return response()->json([
            "message" => "Logout berhasil"
        ], 201);
    }

    public function update(UserUpdateRequest $request) : JsonResponse{

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
        return (new UserResource($user))->response()->setStatusCode(201);
    }

    function summary() {
        $user = auth()->user();

        return response()->json([
            "status" => "success",
            "data" => new SummaryResource($user)
        ], 201);
    }
}
