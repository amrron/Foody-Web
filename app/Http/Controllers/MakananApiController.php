<?php

namespace App\Http\Controllers;

use App\Http\Resources\MakananResource;
use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananApiController extends Controller
{
    public function getall(){
        $makanans = Makanan::latest()->filter(request(['search', 'protein', 'karbohidrat', 'garam', 'gula', 'lemak', 'kategori']))->get();

        $makanan = [];
        foreach($makanans as $makan) {
            array_push($makanan, new MakananResource($makan));
        }
        
        return response()->json([
            'status' => "success",
            'data' => $makanan
        ], 201);
    }
}
