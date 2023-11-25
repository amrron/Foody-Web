<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CatatanMakanan extends Model
{
    use HasFactory;
    use HasUuids;

    protected $guarded = ['id'];

    protected $with = ['user', 'makanan'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function makanan(){
        return $this->belongsTo(Makanan::class);
    }

    public function getTanggalWaktuAttribute()
    {
        return Carbon::parse($this->waktu)->format('Y/m/d');
    }

    public function getJamAttribute() {
        return Carbon::parse($this->waktu)->format('H:i');
    }

    public function getHariAttribute() {
        return Carbon::parse($this->waktu)->locale('id')->dayName;
    }
}
