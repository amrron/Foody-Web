<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BmiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BmiApiController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CatatankuController;

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
        "title" => "Home",
        "produk" => \App\Models\Produk::latest()->take(6)->get()
    ]);
});

Route::middleware('auth')->group(function(){
    Route::get('/catatanku', [CatatankuController::class, 'index']);
    Route::get('/catatanku/history', [CatatankuController::class, 'history']);
    Route::post('/catatanku', [CatatankuController::class, 'store']);
    Route::post('/catatanku/input', [CatatankuController::class, 'input']);
    Route::delete('/catatanku/delete/{id}', [CatatankuController::class, 'destroy']);
    Route::get('/bmi', [BmiController::class, 'index']);
    Route::get('/bmi/history', [BmiController::class, 'history']);
    Route::post('/bmi', [BmiController::class, 'store']);
    Route::delete('/bmi/delete/{id}', [BmiController::class, 'destroy']);
    Route::get('/bmi/dataforchart', [BmiController::class, 'getDataForChart']);
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::put('/profile/edit', [ProfileController::class, 'edit']);
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get("/bmi/chart", [BmiApiController::class, 'chart']);
    Route::post("/profile/report", [ProfileController::class, 'report']);
});

Route::get('/makanan', [MakananController::class, 'index']);
Route::get("/makanan/{makanan:slug}", [MakananController::class, 'detailMakanan']);
Route::get('/makanan/search/{nama}', [MakananController::class, 'cariMakanan']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');;
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/produk', [ProdukController::class, 'index']);
Route::post('/feedback', [FeedbackController::class, 'store']);


Route::middleware('admin')->group(function(){
    Route::get('/adminpanel', [AdminController::class, 'index']);
    Route::get('/adminpanel/userdata', [AdminController::class, 'userdata']);
    Route::get('/adminpanel/fooddata', [AdminController::class, 'fooddata']);
    Route::get('/adminpanel/fooddata/add', [AdminController::class, 'addMakanan']);
    Route::post('/adminpanel/fooddata/add', [AdminController::class, 'storeMakanan']);
    Route::get('/adminpanel/fooddata/edit/{makanan}', [AdminController::class, 'editMakanan']);
    Route::post('/adminpanel/fooddata/edit/{makanan}', [AdminController::class, 'simpanEditMakanan']);
    Route::delete('/adminpanel/fooddata/delete/{makanan}', [AdminController::class, 'deleteMakanan']);
    Route::get('/adminpanel/productdata', [AdminController::class, 'produk']);
    Route::delete('/adminpanel/productdata/delete/{produk}', [AdminController::class, 'deleteProduk']);
    Route::get('/adminpanel/productdata/edit/{produk}', [AdminController::class, 'dataProduk']);
    Route::post('/adminpanel/productdata/edit/{id}', [AdminController::class, 'editProduk']);
    Route::post('/adminpanel/productdata', [AdminController::class, 'addProduk']);
    Route::get('/adminpanel/feedback', [AdminController::class, 'feedback']);
    Route::get('/adminpanel/feedback/{feedback}', [AdminController::class, 'feedbackDetail']);
});