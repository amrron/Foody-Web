<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MakananResource extends JsonResource
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
            'nama' => $this->nama,
            'slug' => $this->slug,
            'deskripsi' => $this->deskripsi,
            'gambar' => $this->gambar,
            'karbohidrat' => $this->karbohidrat,
            'protein' => $this->protein,
            'garam' => $this->garam,
            'gula' => $this->gula,
            'lemak' => $this->lemak,
        ];
    }
}
