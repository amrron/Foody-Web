<?php

namespace App\Http\Controllers;

use App\Models\CatatanMakanan;
use Illuminate\Http\Request;

class CatatankuController extends Controller
{
    public function index()
    {
        return view('catatanku', [
            "title" => "Catatanku",
            "catatans" => CatatanMakanan::all(),
            "pagination" => false
        ]);
    }
    public function history () {
        return view("catatanku", [
            "title" => "Catatanku - History",
            "catatans" => CatatanMakanan::latest()->paginate(5),
            "pagination" => true
        ]);
    }
}
