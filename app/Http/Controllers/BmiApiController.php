<?php

namespace App\Http\Controllers;

use App\Http\Requests\BmiRequest;
use App\Models\Bmi;
use Illuminate\Http\Request;

class BmiApiController extends Controller
{
    public function store(BmiRequest $request){
        if(!auth()->check()){
            return response()->json([
                'status' => "error",
                'message' => "Unauthorized"
            ], 401);
        }

        $validatedBmi = $request->validated();
        $validatedBmi['user_id'] = auth()->user()->id;
        $validatedBmi['waktu'] = date('Y-m-d');
        $validatedBmi['nilai_bmi'] = $validatedBmi['berat_badan'] / pow(($validatedBmi['tinggi_badan'] / 100), 2);

        Bmi::create($validatedBmi);

        return response()->json([
            "status" => "success",
            "message" => "Berhasil menambahkan BMI"
        ], 201);
    }

    public function recent(){
        if(!auth()->check()){
            return response()->json([
                'status' => "error",
                'message' => "Unauthorized"
            ], 401);
        }

        $bmi = Bmi::where('user_id', auth()->user()->id)->where('waktu', '>=', date('Y-m-d'))->get()->sortBy('waktu');
        $bmis = [];
        foreach($bmi as $bm){
            array_push($bmis, [
                'id' => $bm->id,
                'nilai_bmi' => $bm->nilai_bmi,
                'waktu' => $bm->waktu,
                'kategori' => $bm->kategori
            ]);
        }

        return response()->json([
            'status' => "success",
            'data' => $bmis
        ], 201);
    }

    public function history(){
        if(!auth()->check()){
            return response()->json([
                'status' => "error",
                'message' => "Unauthorized"
            ], 401);
        }

        $groupedBmi = Bmi::where('user_id', auth()->user()->id)->where('waktu', '<', date('Y-m-d'))->get()->sortByDesc('waktu')->groupBy('waktu');
        $bmis = [];

        foreach($groupedBmi as $tanggal => $bmi){
            $array = [];
            foreach($bmi as $bm){
                array_push($array, [
                    'id' => $bm->id,
                    'nilai_bmi' => $bm->nilai_bmi,
                    'waktu' => $bm->waktu,
                    'kategori' => $bm->kategori
                ]);
            }
            array_push($bmis, [$tanggal => $array]);
        }

        return response()->json([
            'status' => "success",
            'data' => $bmis
        ], 201);
    }

    public function delete(Bmi $bmi) {
        
        if(!auth()->check() || auth()->user()->id !== $bmi->user_id){
            return response()->json([
                'status' => "error",
                'message' => "Unauthorized"
            ], 401);
        }

        $bmi->delete();

        return response()->json([
            'status' => "success",
            'message' => "Berhasil menghapus catatan BMI"
        ], 201);
    }
}
