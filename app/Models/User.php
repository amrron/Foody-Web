<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'jenis_kelamin',
        'tanggal_lahir',
        'aktivitas'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function catatanMakanan(){
        return $this->hasMany(CatatanMakanan::class);
    }

    public function bmi()
    {
        return $this->hasMany(Bmi::class);
    }

    public function getRataRataBmiAttribute(){
        return $this->bmi->avg('nilai_bmi');
    }

    public function getBeratBadanAttribute(){
        return $this->bmi->last()->berat_badan;
    }

    public function getTinggiBadanAttribute(){
        return $this->bmi->last()->tinggi_badan;
    }

    public function GetUsiaAttribute(){
        return Carbon::parse($this->tanggal_lahir)->age;
    }

    public function getDailyKarboAttribute() {
        return $this->catatanMakanan->where('waktu', '>=', date('Y-m-d'))->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->karbohidrat; });
    }

    public function getDailyProteinAttribute() {
        return $this->catatanMakanan->where('waktu', '>=', date('Y-m-d'))->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->protein; });
    }

    public function getDailyGaramAttribute() {
        return $this->catatanMakanan->where('waktu', '>=', date('Y-m-d'))->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->garam; });
    }

    public function getDailyGulaAttribute() {
        return $this->catatanMakanan->where('waktu', '>=', date('Y-m-d'))->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->gula; });
    }

    public function getDailyLemakAttribute() {
        return $this->catatanMakanan->where('waktu', '>=', date('Y-m-d'))->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->lemak; });
    }

    public function getTotalKarboAttribute() {
        return $this->catatanMakanan->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->karbohidrat; });
    }

    public function getTotalProteinAttribute() {
        return $this->catatanMakanan->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->protein; });
    }

    public function getTotalGaramAttribute() {
        return $this->catatanMakanan->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->garam; });
    }

    public function getTotalGulaAttribute() {
        return $this->catatanMakanan->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->gula; });
    }

    public function getTotalLemakAttribute() {
        return $this->catatanMakanan->sum(function ($catatan){ return $catatan->jumlah * $catatan->makanan->lemak; });
    }

    public function getKebutuhanKaloriAttribute(){

        // Asumsikan kesehatan normal dan aktivitas sedang
        $aktivitas = 1.2;
        $kesehatan = 1;

        // Kebutuhan kalori = (10 * berat badan) + (6.25 * tinggi badan) - (5 * umur) + (5 jika laki-laki, -161 jika perempuan)
        $kebutuhankalori = ((10 * $this->beratBadan) + (6.25 * $this->tinggiBadan) - (5 * $this->usia) + ($this->jenis_kelamin == "Laki-laki" ? 5 : -161)) * $aktivitas * $kesehatan;

        return $kebutuhankalori;
    }

    public function getBatasKarboAttribute() {
        // Jika 55% kebutuahan kalori berasal dari karbodirat, 1 gram karbohidart 4 kalori
        return round($this->kebutuhanKalori * 0.55 / 4);
    }

    public function getBatasProteinAttribute() {
        // Jika 15% kebutuahan kalori berasal dari protein, 1 gram protein 4 kalori
        return round($this->kebutuhanKalori * 0.15 / 4);
    }

    public function getBatasGaramAttribute() {
        return 5;
    }

    public function getBatasGulaAttribute() {
        return 50;
    }

    public function getBatasLemakAttribute() {
        // Jika 30% kebutuahan kalori berasal dari protein, 1 gram protein 4 kalori
        return round($this->kebutuhanKalori * 0.30 / 9);
    }
    
}
