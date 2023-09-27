<?php

namespace App\Http\Controllers;

use App\Models\Bmi;
use App\Models\Makanan;
use Illuminate\Http\Request;
use App\Models\CatatanMakanan;

class CatatankuController extends Controller
{
    public function index()
    {
        // $jenis_kelamin = auth()->user()->jenis_kelamin;
        $berat_badan = Bmi::latest()->where('user_id', auth()->user()->id)->select('berat_badan', 'tinggi_badan')->get()[0]->berat_badan;
        $batas_karbo = 325;
        $batas_protein = $berat_badan * 1.2;
        $batas_garam = 5;
        $batas_gula = 50;
        $batas_lemak = 67;

        $catatans = CatatanMakanan::where('user_id', auth()->user()->id)->where('waktu', '>=', date('Y-m-d'))->get()->sortBy('waktu');
        $jumlah_karbo = $catatans->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->karbohidrat; });
        $jumlah_protein = $catatans->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->protein; });
        $jumlah_garam = $catatans->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->garam; });
        $jumlah_gula = $catatans->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->gula; });
        $jumlah_lemak = $catatans->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->lemak; });

        $warning = collect([
            "karbo" => $jumlah_karbo > $batas_karbo,
            "protein" => $jumlah_protein > $batas_protein,
            "garam" => $jumlah_garam > $batas_garam,
            "gula" => $jumlah_gula > $batas_gula,
            "lemak" => $jumlah_lemak > $batas_lemak
        ]);

        return view('catatanku', [
            "title" => "Catatanku",
            "catatans" => $catatans,
            "makanans" => Makanan::all(),
            "pagination" => false,
            "batas_karbo" => $batas_karbo,
            "batas_protein" => $batas_protein,
            "batas_gula" => $batas_gula,
            "batas_garam" => $batas_garam,
            "batas_lemak" => $batas_lemak,
            "jumlah_karbo" => $jumlah_karbo,
            "jumlah_protein" => $jumlah_protein,
            "jumlah_garam" => $jumlah_garam,
            "jumlah_gula" => $jumlah_gula,
            "jumlah_lemak" => $jumlah_lemak,
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
}
