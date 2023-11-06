<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'slug', 'gambar', 'deskripsi', 'karbohidrat', 'protein', 'garam', 'gula', 'lemak'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('nama', 'LIKE', '%' . $search . '%')
                    ->orWhere('deskripsi', 'LIKE', '%' . $search . '%');
            });
        });

        $query->when($filters['kategori'] ?? false, function($query, $kategori) {
            if($kategori == "rendah-lemak"){
                return $query->where("lemak", "<", 3);
            }
            if($kategori == "tinggi-lemak"){
                return $query->where("lemak", ">", 17.5);
            }
            if($kategori == "rendah-protein"){
                return $query->where("protein", "<", 2.85);
            }
            if($kategori == "tinggi-protein"){
                return $query->where("protein", ">", 11.4);
            }
            if($kategori == "rendah-karbohidrat"){
                return $query->where("karbohidrat", "<", 11.5);
            }
            if($kategori == "tinggi-karbohidrat"){
                return $query->where("karbohidrat", ">", 57.5);
            }
        });

        $query->when($filters['protein'] ?? false, function ($query, $protein) {
           return $query->where('protein', $protein);
        });

        $query->when($filters['karbohidrat'] ?? false, function ($query, $karbohidrat) {
            return $query->where('karbohidrat', $karbohidrat);
        });

        $query->when($filters['garam'] ?? false, function ($query, $garam) {
            return $query->where('garam', $garam);
        });

        $query->when($filters['gula'] ?? false, function ($query, $gula) {
            return $query->where('gula', $gula);
        });

        $query->when($filters['lemak'] ?? false, function ($query, $lemak) {
            return $query->where('lemak', $lemak);
        });
    }

    public function catatanMakanan(){
        return $this->hasMany(CatatanMakanan::class);
    }
    // protected $guarded = ['id'];
}
