<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(Request $request) {

        $produk = Produk::all();
            
        if(isset($request['search'])){
            $produk = Produk::where('nama', 'LIKE', '%' . $request['search'] . '%')->get();
        }

        return view("produk", [
            'title' => "Produk",
            'produk' => $produk
        ]);
    }
}
