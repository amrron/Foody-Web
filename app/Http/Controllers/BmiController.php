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

    public function getDataForChart() {
        $data = [
            'labels' => Bmi::where('user_id', auth()->user()->id)->pluck('waktu'),
            'datasets' => [
                [
                    'label' => 'Max BMI Normal',
                    'type' => 'line',
                    'data' => array_fill(0, count(Bmi::where('user_id', auth()->user()->id)->pluck('nilai_bmi')), 24.9),
                    'backgroundColor' => 'rgba(235, 52, 52)',
                    'borderColor' => 'rgb(255,0,0)',
                    'borderWidth' => 1,
                    'pointRadius' => 0,
                ],
                [
                    'label' => 'Min BMI Normal',
                    'type' => 'line',
                    'data' => array_fill(0, count(Bmi::where('user_id', auth()->user()->id)->pluck('nilai_bmi')), 18.5),
                    'backgroundColor' => 'rgba(55, 148, 230)',
                    'borderColor' => 'rgb(55, 148, 230)',
                    'borderWidth' => 1,
                    'pointRadius' => 0,
                    'fill' => false,
                ],
                [
                    'label' => 'Nilai BMI',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'data' => Bmi::where('user_id', auth()->user()->id)->pluck('nilai_bmi'),
                    'type' => 'line',
                    'fill' => false
                ],
                
            ],
        ];

        return response()->json($data);
    }
}
