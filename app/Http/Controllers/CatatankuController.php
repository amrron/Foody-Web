<?php

namespace App\Http\Controllers;

use App\Models\CatatanMakanan;
use App\Models\Makanan;
use Illuminate\Http\Request;

class CatatankuController extends Controller
{
    public function index()
    {
        return view('catatanku', [
            "title" => "Catatanku",
            "catatans" => CatatanMakanan::where('user_id', auth()->user()->id)->where('waktu', '>', date('Y-m-d'))->get()->sortBy('waktu'),
            "makanans" => Makanan::all(),
            "pagination" => false
        ]);
    }
    public function history () {
        return view("catatanku", [
            "title" => "Catatanku - History",
            "catatans" => CatatanMakanan::where('user_id', auth()->user()->id)->where('waktu', '<', date('Y-m-d'))->paginate(15),
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
