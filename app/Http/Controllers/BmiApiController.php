<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Bmi;
use Illuminate\Http\Request;
use App\Http\Requests\BmiRequest;
use Illuminate\Support\Facades\Http;

class BmiApiController extends Controller
{
    public function store(BmiRequest $request){

        $validatedBmi = $request->validated();
        $validatedBmi['user_id'] = auth()->user()->id;
        $validatedBmi['waktu'] = date('Y-m-d');
        $validatedBmi['nilai_bmi'] = $validatedBmi['berat_badan'] / pow(($validatedBmi['tinggi_badan'] / 100), 2);

        $bmi = Bmi::create($validatedBmi);

        return response()->json([
            "status" => "success",
            "message" => "Berhasil menambahkan BMI",
            "data" => [
                'nilai_bmi' => round($validatedBmi['nilai_bmi'], 2),
                'kategori' => $bmi->kategori['status'],
                'warna' => $bmi->kategori['color'],
                'warna_tebal' => $bmi->kategori['strongColor'],
            ]
        ], 201);
    }

    public function recent(){

        $bmi = Bmi::where('user_id', auth()->user()->id)->where('waktu', '>=', date('Y-m-d'))->get()->sortBy('waktu');
        $bmis = [];
        foreach($bmi as $bm){
            array_push($bmis, [
                'id' => $bm->id,
                'nilai_bmi' => $bm->nilai_bmi,
                'waktu' => $bm->waktu,
                'kategori' => $bm->kategori
            ]);
        }

        return response()->json([
            'status' => "success",
            'data' => $bmis
        ], 201);
    }

    public function history(){

        $groupedBmi = Bmi::where('user_id', auth()->user()->id)->where('waktu', '<=', date('Y-m-d'))->get()->sortByDesc('waktu')->groupBy('waktu');
        $bmis = [];

        foreach($groupedBmi as $tanggal => $bmi){
            $array = [];
            foreach($bmi as $bm){
                array_push($array, [
                    'id' => $bm->id,
                    'nilai_bmi' => $bm->nilai_bmi,
                    'waktu' => $bm->waktu,
                    'kategori' => $bm->kategori
                ]);
            }
            array_push($bmis, [
                'hari' => Carbon::parse($tanggal)->locale('id')->dayName,
                'tanggal' => $tanggal,
                'data' => $array
            ]);
        }

        return response()->json([
            'status' => "success",
            'data' => $bmis
        ], 201);
    }

    public function delete(Bmi $bmi) {
        
        if(Bmi::where('user_id', auth()->user()->id)->count() < 2) {
            return response()->json([
                "status" => 'error',
                "message" => 'Tidak dapat menghapus satu-satunya catatan!'
            ], 400);
        }
        else {
            $bmi->delete();

            return response()->json([
                'status' => "success",
                'message' => "Berhasil menghapus catatan BMI"
            ], 201);
        }
    }

    public function chart() {

        $labels = Bmi::where('user_id', auth()->user()->id)->pluck('waktu')->toArray();
        if(count($labels) < 2) {
            array_push($labels, date('Y-m-d'));
        }

        $data = [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Nilai BMI',
                    'borderColor' => 'rgba(23, 24, 79)',
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
        
        $setup = [
            "type" => "line",
            "data" => $data,
            "options" => [
                "responsive" => true,
                "maintainAspectRatio" => false,
                "plugins" => ["legend" => ["position" => "top"]],
                "scales" => ["x" => ["display" => false]],
            ],
        ];

        $link = "https://quickchart.io/chart?c=" . json_encode($setup);
        return response()->json([
            'status' => 'success',
            'data' => [
                'link' => $link
            ]
        ], 201);
    }
}
