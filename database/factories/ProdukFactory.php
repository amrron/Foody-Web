<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => substr(fake()->sentence(mt_rand(1,2)), 0, -1),
            'deskripsi' => fake()->paragraph(),
            'harga' => fake()->numberBetween(10000, 500000),
            'gambar' => fake()->imageUrl(360, 360, 'food', true),
            'link' => fake()->url()
        ];
    }
}
