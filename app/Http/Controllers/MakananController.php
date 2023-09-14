<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makanan;

class MakananController extends Controller
{
    public function index() {

        return view("makanan", [
            "title" => "Makanan",
            "makanan" => Makanan::latest()->filter(request(['search', 'protein', 'karbohidrat', 'garam', 'gula', 'lemak']))->get()
        ]);
    }

    public function detailMakanan(Makanan $makanan) {
        return view('detailmakanan', [
            "title" => "Makanana satuan",
            "makanan" => $makanan
        ]);
    }

    public function cariMakanan($makanan) {
        return view("makanan", [
            "title" => "Cari makanana: " . $makanan . " | FOODY",
            "makanan" => Makanan::where('nama', 'LIKE', '%' . $makanan . '%')->get()
        ]);
    }
}
