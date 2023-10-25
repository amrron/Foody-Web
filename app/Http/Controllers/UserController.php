<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Resources\RegisterResource;
use App\Models\Bmi;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
}
