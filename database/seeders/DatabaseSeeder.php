<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bmi;
use Illuminate\Database\Seeder;
use App\Models\Makanan;
use App\Models\User;
use App\Models\CatatanMakanan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Makanan::factory(10)->create();

        CatatanMakanan::factory(30)->create();

        Bmi::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

//        Makanan::create([
//            'nama' => "Bubur Ayam",
//            'deskripsi' => 'Bubur ayam berasala dari kata bubur dan ayam',
//            'slug' => 'bubur-ayam',
//            'gambar' => 'bubur-ayam.jpg',
//            'protein' => 5,
//            'karbohidrat' => 29,
//            'garam' => 4,
//            'gula' => 4,
//            'lemak' => 4
//        ]);
//
//        Makanan::create([
//            'nama' => "Mie Ayam",
//            'deskripsi' => 'Mie ayam berasala dari kata mie dan ayam',
//            'slug' => 'mie-ayam',
//            'gambar' => 'mie-ayam.jpg',
//            'protein' => 5,
//            'karbohidrat' => 25,
//            'garam' => 4,
//            'gula' => 4,
//            'lemak' => 4
//        ]);
//
//        Makanan::create([
//            'nama' => "Ketoprak",
//            'deskripsi' => 'ketoprak berasala dari kata ketoprak',
//            'slug' => 'ketoprak',
//            'gambar' => 'ketoprak.jpg',
//            'protein' => 5,
//            'karbohidrat' => 29,
//            'garam' => 4,
//            'gula' => 4,
//            'lemak' => 4
//        ]);
//
//        Makanan::create([
//            'nama' => "Bakso",
//            'deskripsi' => 'Bakso berasala dari kata bak dan so',
//            'slug' => 'bakso',
//            'gambar' => 'mie-ayam.jpg',
//            'protein' => 5,
//            'karbohidrat' => 20,
//            'garam' => 4,
//            'gula' => 3,
//            'lemak' => 6
//        ]);

//        User::create([
//            'name' => 'Ali Imron',
//            'email' => 'imrona463@gmail.com',
//            'username' => 'alimron',
//            'password' => 'password123',
//            'jenis_kelamin' => 'Pria',
//            'tanggal_lahir' => '2004-08-12'
//        ]);
//
//        User::create([
//            'name' => 'Jamaludin',
//            'email' => 'jamaludin@gmail.com',
//            'username' => 'jamal',
//            'password' => 'password123',
//            'jenis_kelamin' => 'Pria',
//            'tanggal_lahir' => '2004-08-12'
//        ]);
//
//        User::create([
//            'name' => 'Koang',
//            'email' => 'koang@gmail.com',
//            'username' => 'koang',
//            'password' => 'password123',
//            'jenis_kelamin' => 'Pria',
//            'tanggal_lahir' => '2004-08-12'
//        ]);

//        CatatanMakanan::create([
//            'user_id' => 2,
//            'makanan_id' => 2,
//            'waktu' => '2023-09-23 23:23:43',
//            'jumlah' => 1
//        ]);
//
//        CatatanMakanan::create([
//            'user_id' => 1,
//            'makanan_id' => 3,
//            'waktu' => '2023-09-23 23:23:43',
//            'jumlah' => 2
//        ]);
//
//        CatatanMakanan::create([
//            'user_id' => 3,
//            'makanan_id' => 4,
//            'waktu' => '2023-09-23 23:23:43',
//            'jumlah' => 1
//        ]);
    }
}
