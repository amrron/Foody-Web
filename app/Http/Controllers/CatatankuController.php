<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;
use App\Models\CatatanMakanan;
use Illuminate\Support\Facades\Gate;

class CatatankuController extends Controller
{
    public function index()
    {
        // dd(auth()->user()->batasKarbo);

        $berat_badan = auth()->user()->beratBadan;
        $batas_karbo = 325;
        $batas_protein = $berat_badan * 1.2;
        $batas_garam = 5;
        $batas_gula = 50;
        $batas_lemak = 67;
        
        $jumlah_karbo = auth()->user()->dailyKarbo;
        $jumlah_protein = auth()->user()->dailyProtein;
        $jumlah_garam = auth()->user()->dailyGaram;
        $jumlah_gula = auth()->user()->dailyGula;
        $jumlah_lemak = auth()->user()->dailyLemak;

        $warning = [
            // "karbo" => $jumlah_karbo > $batas_karbo,
            // "protein" => $jumlah_protein > $batas_protein,
            // "garam" => $jumlah_garam > $batas_garam,
            // "gula" => $jumlah_gula > $batas_gula,
            // "lemak" => $jumlah_lemak > $batas_lemak
        ];

        if ($jumlah_karbo > $batas_karbo) {
            array_push($warning, 'karbohidrat');
        }
        if ($jumlah_protein > $batas_protein) {
            array_push($warning, 'protein');
        }
        if ($jumlah_garam > $batas_garam) {
            array_push($warning, 'garam');
        }
        if ($jumlah_gula > $batas_gula) {
            array_push($warning, 'gula');
        }
        if ($jumlah_lemak > $batas_lemak) {
            array_push($warning, 'lemak');
        }

        // dd(auth()->user()->catatanMakanan->where('waktu', '>=', date('Y-m-d'))->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->karbohidrat; }));

        return view('catatanku', [
            "title" => "Catatanku",
            "catatans" => CatatanMakanan::where('user_id', auth()->user()->id)->where('waktu', '>=', date('Y-m-d'))->get()->sortBy('waktu'),
            "makanans" => Makanan::all(),
            "pagination" => false,
            "batas_karbo" => $batas_karbo,
            "batas_protein" => $batas_protein,
            "batas_gula" => $batas_gula,
            "batas_garam" => $batas_garam,
            "batas_lemak" => $batas_lemak,
            "warning" => $warning
        ]);
    }
    public function history () {

        $catatanMakanan = CatatanMakanan::where('user_id', auth()->user()->id)->get()->sortByDesc('waktu');
        $catatanPerTanggal = $catatanMakanan->groupBy('tanggalWaktu');

        return view("catatanku", [
            "title" => "Catatanku - History",
            // "catatans" => CatatanMakanan::where('user_id', auth()->user()->id)->where('waktu', '<', date('Y-m-d'))->paginate(15),
            "catatans" => $catatanPerTanggal,
            "pagination" => true
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'makanan_id' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'waktu' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['waktu'] = date('Y-m-d') . " " . $validatedData['waktu'];

        CatatanMakanan::create($validatedData);

//        $request->session()->flash('success', 'Akun anda berhasil dibuat, silahkan login');

        return redirect('/catatanku');
    }

    public function destroy(CatatanMakanan $catatan){
        $catatan->delete();
    }
}
