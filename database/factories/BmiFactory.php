<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bmi>
 */
class BmiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $berat = fake()->numberBetween(40, 90);
        $tinggi = fake()->numberBetween(150, 190);
        return [
            'user_id' => 1,
            'waktu' => fake()->date('Y-m-d'),
            'berat_badan' => $berat,
            'tinggi_badan' => $tinggi,
            'nilai_bmi' => $berat / pow(($tinggi / 100), 2)
        ];
    }
}
