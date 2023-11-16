<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makanan;

class MakananController extends Controller
{
    public function index() {

        return view("food", [
            "title" => "Makanan",
            "makanan" => Makanan::latest()->filter(request(['search', 'protein', 'karbohidrat', 'garam', 'gula', 'lemak', 'kategori']))->get()
        ]);
    }

    public function detailMakanan(Makanan $makanan) {
        return view('detailmakanan', [
            "title" => $makanan->nama,
            "makanan" => $makanan
        ]);
    }

    public function cariMakanan($makanan) {
        return view("makanan", [
            "title" => "Cari makanan: " . $makanan . " | FOODY",
            "makanan" => Makanan::where('nama', 'LIKE', '%' . $makanan . '%')->get()
        ]);
    }
}
