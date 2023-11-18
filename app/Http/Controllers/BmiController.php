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
           'bmis' => Bmi::where('user_id', auth()->user()->id)->where('waktu', '>=', date('Y-m-d'))->get()->sortBy('waktu'),
           'history' => false
            // 'bmis' => Bmi::all()
        ]);
    }

    public function history() {
        return view('bmi', [
            'title' => 'BMI - History',
            'bmis' => Bmi::where('user_id', auth()->user()->id)->where('waktu', '<=', date('Y-m-d'))->get()->sortByDesc('waktu')->groupBy('waktu'),
            'history' => true
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

        $bmi = Bmi::create($validatedData);

        $request->session()->flash('success', [
            'nilai_bmi' => round($validatedData['nilai_bmi'], 2),
            'kategori' => $bmi->kategori['status'],
            'warna' => $bmi->kategori['color'],
            'warna_tebal' => $bmi->kategori['strongColor'],
            ]) ;

        return redirect('/bmi');
    }

    public function getDataForChart() {
        $labels = Bmi::where('user_id', auth()->user()->id)->pluck('waktu')->toArray();
        if(count($labels) < 2) {
            array_push($labels, date('Y-m-d'));
        }
        $data = [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Nilai BMI',
                    'borderColor' => '#17184f',
                    'backgroundColor' => 'rgba(255, 255, 255)',
                    'data' => Bmi::where('user_id', auth()->user()->id)->pluck('nilai_bmi'),
                    'type' => 'line',
                    'tension' => 0,
                    'fill' => false
                ],
                [
                    'label' => 'Berat Badan Kurang',
                    'type' => 'line',
                    'data' => array_fill(0, count(Bmi::where('user_id', auth()->user()->id)->pluck('nilai_bmi')) + 1, 18.5),
                    'backgroundColor' => 'rgba(28, 195, 232)',
                    'borderColor' => 'rgb(28, 195, 232)',
                    'borderWidth' => 1,
                    'pointRadius' => 0,
                    'fill' => true,
                ],
                [
                    'label' => 'Berat Badan Normal',
                    'type' => 'line',
                    'data' => array_fill(0, count(Bmi::where('user_id', auth()->user()->id)->pluck('nilai_bmi')) + 1, 24.9),
                    'backgroundColor' => 'rgba(43, 194, 70)',
                    'borderColor' => 'rgb(43, 194, 70)',
                    'borderWidth' => 1,
                    'pointRadius' => 0,
                    'fill' => true,
                ],
                [
                    'label' => 'Kelebihan Berat Badan',
                    'type' => 'line',
                    'data' => array_fill(0, count(Bmi::where('user_id', auth()->user()->id)->pluck('nilai_bmi')) + 1, 29.9),
                    'backgroundColor' => 'rgba(219, 190, 22)',
                    'borderColor' => 'rgb(219, 190, 22)',
                    'borderWidth' => 1,
                    'pointRadius' => 0,
                    'fill' => true,
                ],
                [
                    'label' => 'Obesitas I',
                    'type' => 'line',
                    'data' => array_fill(0, count(Bmi::where('user_id', auth()->user()->id)->pluck('nilai_bmi')) + 1, 34.9),
                    'backgroundColor' => 'rgba(219, 104, 22)',
                    'borderColor' => 'rgb(219, 104, 22)',
                    'borderWidth' => 1,
                    'pointRadius' => 0,
                    'fill' => true,
                ],
                [
                    'label' => 'Obesitas II',
                    'type' => 'line',
                    'data' => array_fill(0, count(Bmi::where('user_id', auth()->user()->id)->pluck('nilai_bmi')) + 1, 39.9),
                    'backgroundColor' => 'rgba(214, 45, 26)',
                    'borderColor' => 'rgb(214, 45, 26)',
                    'borderWidth' => 1,
                    'pointRadius' => 0,
                    'fill' => true,
                ],
                [
                    'label' => 'Obesitas III',
                    'type' => 'line',
                    'data' => array_fill(0, count(Bmi::where('user_id', auth()->user()->id)->pluck('nilai_bmi')) + 1, 45),
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

    public function destroy($id){
        if(Bmi::where('user_id', auth()->user()->id)->count() < 2) {
            return response()->json([
                "status" => 'error',
                "message" => 'Tidak dapat menghapus satu-satunya catatan!'
            ], 400);
        }
        else {
            Bmi::where('id', $id)->delete();
        }
    }

}
