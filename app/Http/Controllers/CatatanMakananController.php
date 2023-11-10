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
            array_push($catatans, new CatatankuResource($catatan));
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
                array_push($note, new CatatankuResource($catat));
            }
            array_push($catatans, [$tanggal => $note]);
        }
        
        return response()->json([
            'status' => "success",
            'data' => $catatans
        ], 201);
    }

    public function delete($id) {
        $catatan = CatatanMakanan::where('id', $id);
        if(!auth()->check()){
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

    public function tanggal($tanggal) {
        $catatans = CatatanMakanan::whereDate('waktu', $tanggal)->get();
        // $catatans = CatatanMakanan::all();

        $catatan = [];
        foreach($catatans as $catat){
            array_push($catatan, new CatatankuResource($catat));
        }

        return response()->json([
            'status' => "success",
            'data' => $catatan
        ], 201);
    }
}
