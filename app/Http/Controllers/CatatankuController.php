<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;
use App\Models\CatatanMakanan;
use Illuminate\Support\Str;
use OpenAI\Laravel\Facades\OpenAI;

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
            'makanan_id' => 'required|string',
            'jumlah' => 'required|numeric',
            'waktu' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['waktu'] = date('Y-m-d') . " " . $validatedData['waktu'];

        CatatanMakanan::create($validatedData);

//        $request->session()->flash('success', 'Akun anda berhasil dibuat, silahkan login');

        return redirect('/catatanku');
    }

    public function destroy($id){
        CatatanMakanan::where('id', $id)->delete();
    }

    public function input(Request $request){
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'jumlah' => 'required|numeric',
            'waktu' => 'required'
        ]);

        $makanan = Makanan::where('nama', 'LIKE', "{$validatedData['nama']}")->first();

        if(empty($makanan)) {
            $makanan = Makanan::where('nama', 'LIKE', "{$validatedData['nama']}%")->first();
        }

        if(empty($makanan)){
            $compilation = OpenAI::chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => 'kamu adalah database yang menyimpan data kandungan makanan, yaitu karbohidrat, protein, garam, gula, lemak, dan deskripsi kurang dari 20 kata. menghasilkan dalam format json'
                    ],
                    [
                        'role' => 'user',
                        'content' => $validatedData['nama']
                    ]
                    ],
                'max_tokens' => 100, 
            ]);

            $result = $compilation['choices'][0]['message']['content'];
            if(!str_contains($result, "{")){
                return response()->json([
                    'status' => 'error',
                    'message' => 'Makanan tidak ditemukan. Periksa kembali nama makanan'
                ], 400);
            }
            $generated_makanan = json_decode($result);
            $new_makanan['nama'] = Str::of($validatedData['nama'])->title();
            $new_makanan['karbohidrat'] = floatval($generated_makanan->karbohidrat);
            $new_makanan['protein'] = floatval($generated_makanan->protein);
            $new_makanan['garam'] = floatval($generated_makanan->garam);
            $new_makanan['gula'] = floatval($generated_makanan->gula);
            $new_makanan['lemak'] = floatval($generated_makanan->lemak);
            $new_makanan['deskripsi'] = $generated_makanan->deskripsi;
            $new_makanan['slug'] = Str::slug($new_makanan['nama']);
            $new_makanan['gambar'] = "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2Foriginals%2Ffd%2F80%2Fec%2Ffd80ecec48eba2a9adb76e4133905879.png";
            $makanan = Makanan::create($new_makanan);
        }

        $makanan_id = $makanan->id;
        $validatedData['makanan_id'] = $makanan_id;
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['waktu'] = date('Y-m-d') . " " . $validatedData['waktu'];

        CatatanMakanan::create($validatedData);

        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil mencatat makanan!'
        ], 201);
    }
}
