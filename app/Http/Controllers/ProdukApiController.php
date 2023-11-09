<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProdukResource;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukApiController extends Controller
{
    public function getall(Request $request){
        
        $produks = Produk::all();
            
        if(isset($request['search'])){
            $produks = Produk::where('nama', 'LIKE', '%' . $request['search'] . '%')->get();
        }

        $produk = [];
        foreach($produks as $prod) {
            array_push($produk, new ProdukResource($prod));
        }
        
        return response()->json([
            'status' => "success",
            'data' => $produk
        ], 201);
    }

    public function detail(Produk $produk) {
        return (new ProdukResource($produk))->response()->setStatusCode(201);
    }
}
