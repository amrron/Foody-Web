<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Makanan>
 */
class MakananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->sentence(mt_rand(1,3)),
            'deskripsi' => fake()->paragraph(),
            'slug' => fake()->slug(),
            'gambar' => fake()->imageUrl(360, 360, 'food', true),
            'protein' => fake()->numberBetween(1,10),
            'karbohidrat' => fake()->numberBetween(10, 50),
            'garam' => fake()->numberBetween(1, 10),
            'gula' => fake()->numberBetween(1, 10),
            'lemak' => fake()->numberBetween(1, 10),
        ];
    }
}
