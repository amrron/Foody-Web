<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class MakananController extends Controller
{
    public function index(Request $request) {

        if(empty(Makanan::where('nama', 'LIKE', '%' . $request->search . '%')
        ->orWhere('deskripsi', 'LIKE', '%' . $request->search . '%')->first())){

            $compilation = OpenAI::chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => 'kamu adalah database yang menyimpan data kandungan makanan, yaitu karbohidrat, protein, garam, gula, lemak, dan deskripsi kurang dari 20 kata. menghasilkan dalam format json'
                    ],
                    [
                        'role' => 'user',
                        'content' => $request->search
                    ]
                    ],
                'max_tokens' => 150, 
            ]);

            $result = $compilation['choices'][0]['message']['content'];
            if(!str_contains($result, "{")){
                $request->session()->flash('gagal', 'AI gagal mendapatakan data makanan. Perikasa kembali nama makanan');
            }
            else {
                $generated_makanan = json_decode($result);
                $new_makanan['nama'] = Str::of($request->search)->title();
                $new_makanan['karbohidrat'] = floatval($generated_makanan->karbohidrat);
                $new_makanan['protein'] = floatval($generated_makanan->protein);
                $new_makanan['garam'] = floatval($generated_makanan->garam);
                $new_makanan['gula'] = floatval($generated_makanan->gula);
                $new_makanan['lemak'] = floatval($generated_makanan->lemak);
                $new_makanan['deskripsi'] = $generated_makanan->deskripsi;
                $new_makanan['slug'] = Str::slug($new_makanan['nama']);
                $new_makanan['gambar'] = "https://www.greatwall.lk/assets/image/default.png";
                Makanan::create($new_makanan);
            }
        }

        return view("food", [
            "title" => "Makanan",
            "makanan" => Makanan::latest()->filter(request(['search', 'protein', 'karbohidrat', 'garam', 'gula', 'lemak', 'kategori']))->get()
        ]);
    }

    public function detailMakanan(Makanan $makanan) {
        return view('detailmakanan', [
            "title" => $makanan->nama,
            "makanan" => $makanan
        ]);
    }

    public function cariMakanan($makanan) {
        return view("makanan", [
            "title" => "Cari makanan: " . $makanan . " | FOODY",
            "makanan" => Makanan::where('nama', 'LIKE', '%' . $makanan . '%')->get()
        ]);
    }
}
