<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SummaryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'rata_rata_bmi' => $this->rataRataBmi,
            'aktivitas' => $this->aktivitas,
            'total_karbohidrat' => $this->totalKarbo,
            'total_protein' => $this->totalProtein,
            'total_garam' => $this->totalGaram,
            'total_gula' => $this->totalGula,
            'total_lemak' => $this->totaLemak,
            'batas_karbohidrat' => $this->batasKarbo,
            'batas_protein' => $this->batasProtein,
            'batas_lemak' => $this->batasLemak,
            'batas_garam' => $this->batasGaram,
            'batas_gula' => $this->batasGula,
            'daily_karbohidrat' => $this->dailyKarbo,
            'daily_protein' => $this->dailyProtein,
            'daily_garam' => $this->dailyGaram,
            'daily_gula' => $this->dailyGula,
            'daily_lemak' => $this->dailyLemak,
            'kebutuhan_kalori' => $this->kebutuhanKalori
        ];
    }
}
