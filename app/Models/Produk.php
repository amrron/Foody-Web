<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'gambar',
        'link'
    ];
}
