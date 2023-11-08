<?php

namespace App\Http\Controllers;

use App\Models\CatatanMakanan;
use App\Models\Feedback;
use App\Models\Makanan;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index() {
        return view("admin.dashboard", [
            'title' => "Dashboard",
            'users' => User::all()->count(),
            'foods' => Makanan::all()->count(),
            'numfeed' => Feedback::all()->count(),
            'feedback' => Feedback::latest()->take(5)->select('nama', 'pesan')->get(),
        ]);
    }

    public function userdata() {
        return view("admin.userdata", [
            'title' => "User Data",
            'users' => User::latest()->filter(request(['search']))->get()
        ]);
    }

    public function fooddata() {
        return view("admin.fooddata", [
            'title' => "Food Data",
            'foods' => Makanan::latest()->filter(request(['search']))->get()
        ]);
    }

    public function feedback() {
        return view("admin.feedback", [
            'title' => "Feedback",
            'feedback' => Feedback::latest()->filter(request(['search']))->get()
        ]);
    }

    public function feedbackDetail(Feedback $feedback){
        return response()->json($feedback);
    }

    public function deleteMakanan(Makanan $makanan) {
        $makanan->delete();
    }

    public function addMakanan() {
        return view("admin.addmakanan", [
            'title' => "Tambah Makanan"
        ]);
    }

    public function storeMakanan(Request $request){
        $makanan = $request->validate([
            'nama' => 'required|string|max:50',
            'deskripsi' => 'required|string',
            'gambar' => 'required|string',
            'protein' => 'required|numeric',
            'karbohidrat' => 'required|numeric',
            'garam' => 'required|numeric',
            'gula' => 'required|numeric',
            'lemak' => 'required|numeric',
        ]);

        $makanan['slug'] = Str::slug($makanan['nama']);

        Makanan::create($makanan);

        $request->session()->flash('success', 'Berhasil Menambahkan makanan');

        return redirect('adminpanel/fooddata/add');
    }

    public function editMakanan(Makanan $makanan) {
        return view("admin.addmakanan", [
            'title' => "Edit Makanan",
            'makanan' => $makanan,
        ]);
    }

    public function simpanEditMakanan(Request $request, Makanan $makanan) {
        $newmakanan = $request->validate([
            'nama' => 'required|string|max:50',
            'deskripsi' => 'required|string',
            'gambar' => 'required|string',
            'protein' => 'required|numeric',
            'karbohidrat' => 'required|numeric',
            'garam' => 'required|numeric',
            'gula' => 'required|numeric',
            'lemak' => 'required|numeric',
        ]);
        
        if($newmakanan['nama'] != $makanan->nama){
            $newmakanan['slug'] = Str::slug($newmakanan['nama']);
        }

        Makanan::where('id', $makanan->id)->update($newmakanan);


        $request->session()->flash('success_edit', 'Berhasil edit makanan');

        return redirect('adminpanel/fooddata');
    }

    public function produk() {
        return view('admin.productdata', [
            'title' => 'Product Data',
            'products' => Produk::latest()->filter(request(['search']))->get()
        ]);
    }

    public function deleteProduk(Produk $produk){
        $produk->delete();
    }

    public function dataProduk(Produk $produk){
        return response()->json($produk, 201);
    }

    public function editProduk(Request $request, Produk $produk){
        $validatedProduk = $request->validate([
            'nama' => 'required|string',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string',
            'gambar' => 'required|string',
            'link' => 'required|string',
        ]);

        Produk::where('id', $produk->id)->update($validatedProduk);
    }

    public function addProduk(Request $request){
        $produk = $request->validate([
            'nama' => 'required|string',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string',
            'gambar' => 'required|string',
            'link' => 'required|string',
        ]);

        Produk::create($produk);
    }
}
