<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Makanan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CatatanMakanan;
use Illuminate\Http\JsonResponse;
use OpenAI\Laravel\Facades\OpenAI;
use App\Http\Resources\CatatankuResource;
use App\Http\Requests\CatatanMakananRequest;

class CatatanMakananController extends Controller
{
    public function store(CatatanMakananRequest $request) : JsonResponse {

        $validatedCatatan = $request->validated();

        $validatedCatatan['waktu'] = date('Y-m-d') . " " . $validatedCatatan['waktu'];
        $validatedCatatan['user_id'] = auth()->user()->id;

        CatatanMakanan::create($validatedCatatan);

        return response()->json([
            "status" => "success",
            "message" => "Berhasil menambahkan catatan"
        ], 201);
    }

    public function input(Request $request){
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'jumlah' => 'required|numeric',
            'waktu' => 'required'
        ]);

        $makanan = Makanan::where('nama', 'LIKE', "{$validatedData['nama']}%")->first();
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
            $makanan['nama'] = Str::of($validatedData['nama'])->title();
            $makanan['karbohidrat'] = floatval($generated_makanan->karbohidrat);
            $makanan['protein'] = floatval($generated_makanan->protein);
            $makanan['garam'] = floatval($generated_makanan->garam);
            $makanan['gula'] = floatval($generated_makanan->gula);
            $makanan['lemak'] = floatval($generated_makanan->lemak);
            $makanan['deskripsi'] = $generated_makanan->deskripsi;
            $makanan['slug'] = Str::slug($makanan['nama']);
            $makanan['gambar'] = "https://www.greatwall.lk/assets/image/default.png";
            $new_makanan = Makanan::create($makanan);
            $makanan_id = $new_makanan->id;

        }
        else {
            $makanan_id = $makanan->id;
        }
        $validatedData['makanan_id'] = $makanan_id;
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['waktu'] = date('Y-m-d') . " " . $validatedData['waktu'];

        CatatanMakanan::create($validatedData);

        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil mencatat makanan!'
        ], 201);
    }

    public function daily() : JsonResponse {

        $catatanku = CatatanMakanan::where('user_id', auth()->user()->id)->where('waktu', '>=', date('Y-m-d'))->get()->sortBy('waktu');
        
        $catatans = [];
        foreach($catatanku as $catatan){
            array_push($catatans, new CatatankuResource($catatan));
        };
        
        return response()->json([
            'status' => "success",
            'data' => $catatans
        ], 201);
    }

    public function history() : JsonResponse {
        
        $catatans = [];

        $catatanMakanan = CatatanMakanan::where('user_id', auth()->user()->id)->get()->sortByDesc('waktu');
        $catatanPerTanggal = $catatanMakanan->groupBy('tanggalWaktu');

        foreach($catatanPerTanggal as $tanggal => $catatan){
            $note = [];
            foreach($catatan as $catat){
                array_push($note, new CatatankuResource($catat));
            }
            array_push($catatans, [
                'hari' => Carbon::parse($tanggal)->locale('id')->dayName,
                'tanggal' => $tanggal,
                'data' => $note
            ]);
        }
        
        return response()->json([
            'status' => "success",
            'data' => $catatans
        ], 201);
    }

    public function delete($id) : JsonResponse {

        $catatan = CatatanMakanan::where('id', $id);

        $catatan->delete();

        return response()->json([
            'status' => "success",
            'message' => "Berhasil menghapus catatan"
        ], 201);
    }

    public function tanggal($tanggal) : JsonResponse {
        $catatans = CatatanMakanan::whereDate('waktu', $tanggal)->get();
        // $catatans = CatatanMakanan::all();

        $catatan = [];
        foreach($catatans as $catat){
            array_push($catatan, new CatatankuResource($catat));
        }

        return response()->json([
            'status' => "success",
            'data' => $catatan
        ], 201);
    }
}
