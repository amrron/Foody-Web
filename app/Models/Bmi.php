<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bmi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getKategoriAttribute(){
        $bmi = $this->nilai_bmi;

        if($bmi < 18.5){
            return [
                'status' => "Berat badan kurang",
                'color' => '#c7a706'
            ];
        }
        elseif($bmi >= 18.5 &&  $bmi <= 24.9){
            return [
                'status' => "Berat badan normal",
                'color' => '#33FF57'
            ];
        }
        elseif($bmi >= 25 &&  $bmi <= 29.9){
            return [
                'status' => "Kelebihan berat badan",
                'color' => '#ff0318'
            ];
        }
        elseif($bmi >= 30 &&  $bmi <= 34.9){
            return [
                'status' => "Obesitas tingkat I",
                'color' => '#cc0213'
            ];
        }
        elseif($bmi >= 35 &&  $bmi <= 39.9){
            return [
                'status' => "Obesitas tingkat II",
                'color' => '#91010d'
            ];
        }
        else {
            return [
                'status' => "Obesitas tingkat III",
                'color' => '#5c0209'
            ];
        }
    }
}
