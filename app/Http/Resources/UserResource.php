<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            "id" => $this->id,
            "name" => $this->name,
            "email" => $this->email,
            "jenis_kelamin" => $this->jenis_kelamin,
            "usia" => \Carbon\Carbon::parse($this->tanggal_lahir)->age,
            "berat_badan" => $this->berat_badan,
            "tanggla_lahir" => $this->tanggal_lahir,
            "tinggi_badan" => $this->tinggi_badan,
            "username" => $this->username
        ];
    }
}
