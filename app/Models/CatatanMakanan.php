<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanMakanan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['user', 'makanan'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function makanan(){
        return $this->belongsTo(Makanan::class);
    }
}
