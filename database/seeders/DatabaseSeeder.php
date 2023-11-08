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
            'aktivitas' => 1.2,
            'role'  => "admin"
        ]);

        $budy = User::create([
            'name' => "Budy Santoso",
            'email' => "budy24@gmail.com",
            'username' => 'budy',
            'password' => 123123,
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => '2004-08-12',
            'aktivitas' => 1.2,
            'role'  => "admin"
        ]);

        $indra = User::create([
            'name' => "Idra Maki",
            'email' => "indramaki@gmail.com",
            'username' => 'indra',
            'password' => 123123,
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => '2004-08-12',
            'aktivitas' => 1.2,
            'role'  => "admin"
        ]);

        $aulia = User::create([
            'name' => "Aulia Anggraeni",
            'email' => "aulianggraeni@gmail.com",
            'username' => 'aulia',
            'password' => 123123,
            'jenis_kelamin' => 'Perempuan',
            'tanggal_lahir' => '2004-08-12',
            'aktivitas' => 1.2,
            'role'  => "admin"
        ]);

        $indah = User::create([
            'name' => "Nur Indah",
            'email' => "nurindah@gmail.com",
            'username' => 'indah',
            'password' => 123123,
            'jenis_kelamin' => 'Perempuan',
            'tanggal_lahir' => '2004-08-12',
            'aktivitas' => 1.2,
            'role'  => "admin"
        ]);

        Makanan::factory(10)->create();

        // CatatanMakanan::factory(30)->create();

        Bmi::factory(10)->create();
        $berat = fake()->numberBetween(40, 90);
        $tinggi = fake()->numberBetween(150, 190);
        Bmi::create([
            'user_id' => $budy->id,
            'waktu' => fake()->date('Y-m-d'),
            'berat_badan' => $berat,
            'tinggi_badan' => $tinggi,
            'nilai_bmi' => $berat / pow(($tinggi / 100), 2)
        ]);

        Bmi::create([
            'user_id' => $indra->id,
            'waktu' => fake()->date('Y-m-d'),
            'berat_badan' => $berat,
            'tinggi_badan' => $tinggi,
            'nilai_bmi' => $berat / pow(($tinggi / 100), 2)
        ]);

        Bmi::create([
            'user_id' => $indah->id,
            'waktu' => fake()->date('Y-m-d'),
            'berat_badan' => $berat,
            'tinggi_badan' => $tinggi,
            'nilai_bmi' => $berat / pow(($tinggi / 100), 2)
        ]);

        Bmi::create([
            'user_id' => $aulia->id,
            'waktu' => fake()->date('Y-m-d'),
            'berat_badan' => $berat,
            'tinggi_badan' => $tinggi,
            'nilai_bmi' => $berat / pow(($tinggi / 100), 2)
        ]);

        Produk::factory(10)->create();

        Feedback::factory(10)->create();
    }
}
