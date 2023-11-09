<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CatatankuResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nama_makanan' => $this->makanan->nama,
            'jumlah' => $this->jumlah,
            'waktu' => $this->waktu,
            'karbohidrat' => $this->jumlah * $this->makanan->karbohidrat,
            'protein' => $this->jumlah * $this->makanan->protein,
            'garam' => $this->jumlah * $this->makanan->garam,
            'gula' => $this->jumlah * $this->makanan->gula,
            'lemak' => $this->jumlah * $this->makanan->lemak,
        ];
    }
}
