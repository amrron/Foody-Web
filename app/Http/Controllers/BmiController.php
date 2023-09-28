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
                    'label' => 'Nilai BMI',
                    'borderColor' => 'rgba(219, 243, 251)',
                    'backgroundColor' => 'rgba(23, 24, 79)',
                    'data' => Bmi::where('user_id', auth()->user()->id)->pluck('nilai_bmi'),
                    'type' => 'line',
                    'tension' => 0.5,
                    'fill' => true
                ],
                [
                    'label' => 'Berat Badan Kurang',
                    'type' => 'line',
                    'data' => array_fill(0, count(Bmi::where('user_id', auth()->user()->id)->pluck('nilai_bmi')), 18.5),
                    'backgroundColor' => 'rgba(28, 195, 232)',
                    'borderColor' => 'rgb(28, 195, 232)',
                    'borderWidth' => 1,
                    'pointRadius' => 0,
                    'fill' => true,
                ],
                [
                    'label' => 'Berat Badan Normal',
                    'type' => 'line',
                    'data' => array_fill(0, count(Bmi::where('user_id', auth()->user()->id)->pluck('nilai_bmi')), 24.9),
                    'backgroundColor' => 'rgba(43, 194, 70)',
                    'borderColor' => 'rgb(43, 194, 70)',
                    'borderWidth' => 1,
                    'pointRadius' => 0,
                    'fill' => true,
                ],
                [
                    'label' => 'Kelebihan Berat Badan',
                    'type' => 'line',
                    'data' => array_fill(0, count(Bmi::where('user_id', auth()->user()->id)->pluck('nilai_bmi')), 29.9),
                    'backgroundColor' => 'rgba(219, 190, 22)',
                    'borderColor' => 'rgb(219, 190, 22)',
                    'borderWidth' => 1,
                    'pointRadius' => 0,
                    'fill' => true,
                ],
                [
                    'label' => 'Obesitas I',
                    'type' => 'line',
                    'data' => array_fill(0, count(Bmi::where('user_id', auth()->user()->id)->pluck('nilai_bmi')), 34.9),
                    'backgroundColor' => 'rgba(219, 104, 22)',
                    'borderColor' => 'rgb(219, 104, 22)',
                    'borderWidth' => 1,
                    'pointRadius' => 0,
                    'fill' => true,
                ],
                [
                    'label' => 'Obesitas II',
                    'type' => 'line',
                    'data' => array_fill(0, count(Bmi::where('user_id', auth()->user()->id)->pluck('nilai_bmi')), 39.9),
                    'backgroundColor' => 'rgba(214, 45, 26)',
                    'borderColor' => 'rgb(214, 45, 26)',
                    'borderWidth' => 1,
                    'pointRadius' => 0,
                    'fill' => true,
                ],
                [
                    'label' => 'Obesitas III',
                    'type' => 'line',
                    'data' => array_fill(0, count(Bmi::where('user_id', auth()->user()->id)->pluck('nilai_bmi')), 45),
                    'backgroundColor' => 'rgb(214, 26, 26)',
                    'borderColor' => 'rgb(214, 26, 26)',
                    'borderWidth' => 1,
                    'pointRadius' => 0,
                    'fill' => true,
                ],
                
                
                
                
            ],
        ];

        return response()->json($data);
    }
}
