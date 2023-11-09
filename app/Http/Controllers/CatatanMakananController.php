<?php

namespace App\Http\Controllers;

use App\Http\Requests\CatatanMakananRequest;
use App\Http\Resources\CatatankuResource;
use App\Models\CatatanMakanan;
use Illuminate\Http\Request;

class CatatanMakananController extends Controller
{
    public function store(CatatanMakananRequest $request) {

        if(!auth()->check()){
            return response()->json([
                'status' => "error",
                'message' => "Unauthorized"
            ], 401);
        }

        $validatedCatatan = $request->validated();

        $validatedCatatan['waktu'] = date('Y-m-d') . " " . $validatedCatatan['waktu'];
        $validatedCatatan['user_id'] = auth()->user()->id;

        CatatanMakanan::create($validatedCatatan);

        return response()->json([
            "status" => "success",
            "message" => "Berhasil menambahkan catatan"
        ], 201);
    }

    public function daily(){

        if(!auth()->check()){
            return response()->json([
                'status' => "error",
                'message' => "Unauthorized"
            ], 401);
        }

        $catatanku = CatatanMakanan::where('user_id', auth()->user()->id)->where('waktu', '>=', date('Y-m-d'))->get()->sortBy('waktu');
        
        $catatans = [];
        foreach($catatanku as $catatan){
            array_push($catatans, [
                'id' => $catatan->id,
                'nama_makanan' => $catatan->makanan->nama,
                'jumlah' => $catatan->jumlah,
                'waktu' => $catatan->waktu,
                'karbohidrat' => $catatan->jumlah * $catatan->makanan->karbohidrat,
                'protein' => $catatan->jumlah * $catatan->makanan->protein,
                'garam' => $catatan->jumlah * $catatan->makanan->garam,
                'gula' => $catatan->jumlah * $catatan->makanan->gula,
                'lemak' => $catatan->jumlah * $catatan->makanan->lemak,
            ]);
        };
        
        return response()->json([
            'status' => "success",
            'data' => $catatans
        ], 201);
    }

    public function history() {

        if(!auth()->check()){
            return response()->json([
                'status' => "error",
                'message' => "Unauthorized"
            ], 401);
        }
        
        $catatans = [];

        $catatanMakanan = CatatanMakanan::where('user_id', auth()->user()->id)->get()->sortByDesc('waktu');
        $catatanPerTanggal = $catatanMakanan->groupBy('tanggalWaktu');

        foreach($catatanPerTanggal as $tanggal => $catatan){
            $note = [];
            foreach($catatan as $catat){
                array_push($note, [
                    'id' => $catat->id,
                    'nama_makanan' => $catat->makanan->nama,
                    'jumlah' => $catat->jumlah,
                    'waktu' => $catat->waktu,
                    'karbohidrat' => $catat->jumlah * $catat->makanan->karbohidrat,
                    'protein' => $catat->jumlah * $catat->makanan->protein,
                    'garam' => $catat->jumlah * $catat->makanan->garam,
                    'gula' => $catat->jumlah * $catat->makanan->gula,
                    'lemak' => $catat->jumlah * $catat->makanan->lemak,
                ]);
            }
            array_push($catatans, [$tanggal => $note]);
        }
        
        return response()->json([
            'status' => "success",
            'data' => $catatans
        ], 201);
    }

    public function delete(CatatanMakanan $catatan) {
        
        if(!auth()->check() || auth()->user()->id !== $catatan->user_id){
            return response()->json([
                'status' => "error",
                'message' => "Unauthorized"
            ], 401);
        }

        $catatan->delete();

        return response()->json([
            'status' => "success",
            'message' => "Berhasil menghapus catatan"
        ], 201);
    }
}
