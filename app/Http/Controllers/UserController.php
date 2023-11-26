<?php

namespace App\Http\Controllers;

use App\Models\Bmi;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\CatatanMakanan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\SummaryResource;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\RegisterResource;

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

    public function report(Request $request) {

        $makanan = CatatanMakanan::where('user_id', auth()->user()->id);
        
        if(isset($request->from) && isset($request->to)){
            $catatanMakanan = $makanan->where('waktu', '>=', $request->from)->where('waktu', '<=', $request->to . ' 23:59');
        }
        
        if(isset($request->from)){
            $catatanMakanan = $makanan->where('waktu', '>=', $request->from);
        }
        
        if(isset($request->to)){
            $catatanMakanan = $makanan->where('waktu', '<=', $request->to . ' 23:59');
        }
        

        else {
            $catatanMakanan = $makanan;
        }
        
        $catatanMakanan = $catatanMakanan->get()->sortBy('waktu');



        $catatanPerTanggal = $catatanMakanan->groupBy('tanggalWaktu');
        $total_jumlah = $catatanMakanan->sum('jumlah');
        $total_karbohidrat = $catatanMakanan->sum(function($catatan){ return $catatan->jumlah * $catatan->makanan->karbohidrat; });
        $total_protein = $catatanMakanan->sum(function($catatan){ return $catatan->jumlah * $catatan->makanan->protein; });
        $total_garam = $catatanMakanan->sum(function($catatan){ return $catatan->jumlah * $catatan->makanan->garam; });
        $total_gula = $catatanMakanan->sum(function($catatan){ return $catatan->jumlah * $catatan->makanan->gula; });
        $total_lemak = $catatanMakanan->sum(function($catatan){ return $catatan->jumlah * $catatan->makanan->lemak; });

        $data = [
            'title' => "Report Catatan Makanan " . auth()->user()->username,
            'catatans' => $catatanPerTanggal,
            'total_jumlah' => $total_jumlah,
            'total_karbohidrat' => $total_karbohidrat,
            'total_protein' => $total_protein,
            'total_garam' => $total_garam,
            'total_gula' => $total_gula,
            'total_lemak' => $total_lemak,
            'email' => auth()->user()->email
        ];

        $pdf = Pdf::loadView('report', $data);

        Mail::send('report', $data, function($message) use ($data, $pdf) {
            $message->to($data['email'], $data['email'])
                    ->subject($data['title'])
                    ->attachData($pdf->output(), "Report_Catatan_Makanan_" . auth()->user()->username . ".pdf");
        });

        return response()->json([
            "status" => "success",
            "message" => "Data Report berhasil dikirim ke email " . auth()->user()->email
        ], 201);
    }
}
