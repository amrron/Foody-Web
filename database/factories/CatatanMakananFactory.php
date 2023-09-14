<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CatatanMakanan>
 */
class CatatanMakananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1,10),
            'makanan_id' => fake()->numberBetween(1, 10),
            'waktu' => fake()->dateTime(),
            'jumlah' => fake()->numberBetween(1, 3)
        ];
    }
}
