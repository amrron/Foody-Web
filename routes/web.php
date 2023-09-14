<?php

use App\Http\Controllers\CatatankuController;
use App\Http\Controllers\MakananController;
use Illuminate\Support\Facades\Route;
use App\Models\Makanan;
use App\Models\CatatanMakanan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});


Route::get('/catatanku', [CatatankuController::class, 'index']);

Route::get('/catatanku/history', [CatatankuController::class, 'history']);

Route::get('/login', function () {
    return view("login", [
        "title" => "Login"
    ]);
});

Route::get('/register', function () {
    return view("register", [
        "title" => "Register"
    ]);
});

Route::get('/makanan', [MakananController::class, 'index']);

Route::get("/makanan/{makanan:slug}", [MakananController::class, 'detailMakanan']);

Route::get('makanan/search/{nama}', [MakananController::class, 'cariMakanan']);
