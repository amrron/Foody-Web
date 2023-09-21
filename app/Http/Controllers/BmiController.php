<?php

namespace App\Http\Controllers;

use App\Models\Bmi;
use App\Models\User;
use Illuminate\Http\Request;

class BmiController extends Controller
{
    public function index(){
        return view('bmi', [
            'title' => "BMI",
           'bmis' => Bmi::where('user_id', auth()->user()->id)->get(),
            // 'bmis' => Bmi::all()
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'berat_badan' => 'required|numeric',
            'tinggi_badan' => 'required|numeric'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['waktu'] = date('Y-m-d');
        $validatedData['nilai_bmi'] = $validatedData['berat_badan'] / pow(($validatedData['tinggi_badan'] / 100), 2);

        Bmi::create($validatedData);

        $request->session()->flash('success', $validatedData['nilai_bmi']) ;

        return redirect('/bmi');
    }
}
