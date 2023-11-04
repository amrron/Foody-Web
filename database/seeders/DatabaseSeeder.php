<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bmi;
use Illuminate\Database\Seeder;
use App\Models\Makanan;
use App\Models\User;
use App\Models\CatatanMakanan;
use App\Models\Feedback;
use App\Models\Produk;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::create([
            'name' => "Ali Imron",
            'email' => "imrona463@gmail.com",
            'username' => 'ali',
            'password' => 123123,
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => '2004-08-12',
            'aktivitas' => 1.2 
        ]);

        Makanan::factory(10)->create();

        CatatanMakanan::factory(30)->create();

        Bmi::factory(10)->create();

        Produk::factory(10)->create();

        Feedback::factory(10)->create();
    }
}
