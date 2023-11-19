<?php

use App\Http\Controllers\BmiApiController;
use App\Http\Controllers\CatatankuController;
use App\Http\Controllers\CatatanMakananController;
use App\Http\Controllers\MakananApiController;
use App\Http\Controllers\ProdukApiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware(['auth:sanctum'])->group(function() {
    Route::get("/users/profile", [UserController::class, 'profile']);
    Route::get("/users/summary", [UserController::class, 'summary']);
    Route::post("/users/logout", [UserController::class, 'logout']);
    Route::put("/users/update", [UserController::class, 'update']);

    Route::post("/catatanku", [CatatanMakananController::class, 'store']);
    Route::post("catatanku/store", [CatatankuController::class, 'input']);
    Route::get("/catatanku/daily", [CatatanMakananController::class, 'daily']);
    Route::get("/catatanku/history", [CatatanMakananController::class, 'history']);
    Route::get("/catatanku/tanggal/{tanggal}", [CatatanMakananController::class, 'tanggal']);
    Route::delete("/catatanku/delete/{id}", [CatatanMakananController::class, 'delete']);

    Route::post(("/bmi"), [BmiApiController::class, 'store']);
    Route::get(("/bmi/recent"), [BmiApiController::class, 'recent']);
    Route::get(("/bmi/history"), [BmiApiController::class, 'history']);
    Route::delete(("/bmi/delete/{bmi}"), [BmiApiController::class, 'delete']);
    Route::get("/bmi/chart/", [BmiApiController::class, 'chart']);
});

Route::post("/users", [UserController::class, 'store']);
Route::post("/users/login", [UserController::class, 'login']);
Route::get("/makanan", [MakananApiController::class, 'getall']);
Route::get("/makanan/{makanan}", [MakananApiController::class, 'detail']);
Route::get("/produk", [ProdukApiController::class, 'getall']);
