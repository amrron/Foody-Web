<?php

use App\Http\Controllers\BmiController;
use App\Http\Controllers\CatatankuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\RegisterController;
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


Route::get('/catatanku', [CatatankuController::class, 'index'])->middleware('auth');;

Route::post('/catatanku', [CatatankuController::class, 'store']);;

Route::get('/catatanku/history', [CatatankuController::class, 'history'])->middleware('auth');

Route::delete('/catatanku/delete/{id}', [CatatankuController::class, 'destroy']);

Route::get('/makanan', [MakananController::class, 'index']);

Route::get("/makanan/{makanan:slug}", [MakananController::class, 'detailMakanan']);

Route::get('makanan/search/{nama}', [MakananController::class, 'cariMakanan']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');;

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/bmi', [BmiController::class, 'index'])->middleware('auth');

Route::post('/bmi', [BmiController::class, 'store']);

Route::get('/bmi/dataforchart', [BmiController::class, 'getDataForChart']);